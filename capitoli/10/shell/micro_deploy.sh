#!/bin/bash
PROJECT_HOME=/var/www/myProject
MY_HOST= www.example.org
REMOTE_PROJECT_HOME=$MY_HOST:/var/www/remoteProject
scp -l MyUser $PROJECT_HOME $REMOTE_PROJECT_HOME
ssh -l MyUser $MY_HOST 'mysql -uUserDB -pPassDB < $REMOTE_PROJECT_HOME/update/upgrade.sql'
ssh -l MyUser $MY_HOST 'php $REMOTE_PROJECT_HOME/update/upgrade.php'
echo "Cancello le cache? (s/n)"
read -e answer
if [ response == "s" ]
then
      ssh -l MyUser $MY_HOST 'rm $REMOTE_PROJECT_HOME/cache/*'
fi

