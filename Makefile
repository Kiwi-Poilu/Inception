all:
	@sed -i "s/localhost/sobouatt.42.fr/g" /etc/hosts
	@mkdir -p /home/kiwi/databases/DB /home/kiwi/databases/WordPress
	@docker-compose -f srcs/docker-compose.yml -p inception up --build

clean:
	@docker system prune -af

stop:
	@docker-compose -f srcs/docker-compose.yml -p inception stop

fclean: clean
	@docker rmi -f wordpress
	@docker rmi -f nginx
	@docker rmi -f mariadb
	@docker rm -f inception:wordpress
	@docker rm -f inception:nginx
	@docker rm -f inception:mariadb
	@rm -rf /home/kiwi/databases/DB
	@rm -rf /home/kiwi/databases/WordPress
	@-docker network rm inception_network
	@-docker volume rm -f inception_DB
	@-docker volume rm -f inception_WordPress

re: fclean all

.PHONY: all, clean, fclean, re, stop
