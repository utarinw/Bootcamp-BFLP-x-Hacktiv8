Tableau Backup

## USER PERMISSION
sudo -l username
cat /etc/group | grep -E 'tableau|tsmadmin'

-----------------------------------------------------------------------------------------------
## BACKUP FILE LOCATION
by default,
/var/opt/tableau/tableau_server/data/tabsvc/files/backups/

# Change backup location
tsm configuration get -k basefilepath.backuprestore
tsm configuration set -k basefilepath.backuprestore -v "/new/directory/path"
tsm pending-changes apply
-----------------------------------------------------------------------------------------------

-----------------------------------------------------------------------------------------------
## Disk space check for backup

sudo su - tableau 

 1. Repository size estimate
du -sh /var/opt/tableau/tableau_server/data/tabsvc/pgsql/data/base

 2. Data Engine size for extract, flow and etc
du -sh /var/opt/tableau/tableau_server/data/tabsvc/dataengine

# Estimate disk space for backup
3 * Repository size 
1.5 * Data Engine File size
+ 250MB

# Process check 
tsm status -v

# for single node
tsm status -v | grep -i -E 'repository|Administration controller|file store'

Step 1. Cleanup old log and temp files in the server
tsm maintenance cleanup

Step 2. Configuration and Topology information.
tsm settings export -f filename.json

Step 3. Run Backup
tsm maintenance backup -f tsbackup -d