Usage
Start the container:

docker run --name cocorico -ti -p 80:8000 -p 3306:3306 -p 9001:9001 -p 27017:27017  -v `pwd`:/cocorico -v `pwd`/tmp/mysql:/var/lib/mysql -v `pwd`/tmp/mongo:/data/db -e HOST_UID=$UID cocolabs/cocorico
Follow the progress of the installation: http://localhost:9001/logtail/cocorico

Once the symfony server is running, enjoy Cocorico: http://localhost

Connect to the container:

docker exec -it --user cocorico cocorico /bin/sh
Stop the container:

docker kill cocorico && docker rm cocorico