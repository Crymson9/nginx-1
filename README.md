# nginx
Useful commands!<br>
<br>
Stopping and removing all containers:<br>
sudo docker stop $(sudo docker ps -a -q)<br>
sudo docker rm $(sudo docker ps -a -q)<br>
<br>
Removing all images:<br>
sudo docker rmi -f $(sudo docker images -aq)
