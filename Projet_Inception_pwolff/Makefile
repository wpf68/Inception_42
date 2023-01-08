# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: pwolff <pwolff@student.42mulhouse.fr>>     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/01/05 13:46:00 by pwolff            #+#    #+#              #
#    Updated: 2023/01/05 14:59:39 by pwolff           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

include ./srcs/.env
export

NAME	= inception
SRCS	= ./srcs/docker-compose.yml
FLAGS	= -d --build
# Colors variables
RED		= \033[1;31m
GREEN	= \033[1;32m
YELLOW	= \033[1;33m
BLUE	= \033[1;34m
RESET	= \033[0m

all:	help $(NAME)

$(NAME):
	@echo "$(GREEN)█████████████████████ Creating volumes ██████████████████████$(RESET)"
	sudo mkdir -p ${DATA_FOLDER}/${WP_FOLDER}
	sudo mkdir -p ${DATA_FOLDER}/${DB_FOLDER}
	sudo mkdir -p ${DATA_FOLDER}/${LG_FOLDER}
	sudo chmod 777 /etc/hosts
	sudo echo "127.0.0.1 pwolff.42.fr" >> /etc/hosts
	sudo echo "127.0.0.1 www.pwolff.42.fr" >> /etc/hosts
	@echo "$(BLUE)██████████████████████ Building Images ███████████████████████$(RESET)"
	docker-compose -f $(SRCS) build
	@echo "$(GREEN)██████████████████████ Running Containers ██████████████████████$(RESET)"
	docker-compose -f $(SRCS) up -d

fclean: clean rvolumes
	@echo "$(RED)████████████████████ Erase all █████████████████████$(RESET)"

clean:
	@echo "$(RED)████████████████████ Erase images █████████████████████$(RESET)"
	docker-compose -f $(SRCS) down
	docker system prune -a --force

re:	fclean all

stop:
	@echo "$(RED)████████████████████ Stoping Containers █████████████████████$(RESET)"
	docker-compose -f $(SRCS) stop

down:
	@echo "$(RED)██████████████████ Removing All Containers ██████████████████$(RESET)"
	docker-compose -f $(SRCS) down

up:
	@echo "$(RED)██████████████████ Start All Containers ██████████████████$(RESET)"
	docker-compose -f $(SRCS) up -d

ps:
	@echo "$(GREEN)██████████████████████ The Running Containers ██████████████████████$(RESET)"
	docker ps

rvolumes:
	@echo "$(RED)█████████████████████ Deleting volumes ██████████████████████$(RESET)"
	sudo rm -rf $(DATA_FOLDER)

info:
	@echo "$(GREEN)██████████████████████ Infos ██████████████████████$(RESET)"
	docker ps -a; \
	docker image ; \
	docker volume ls

help:
	@echo "██╗███╗   ██╗ ██████╗███████╗██████╗ ████████╗██╗ ██████╗ ███╗   ██╗"
	@echo "██║████╗  ██║██╔════╝██╔════╝██╔══██╗╚══██╔══╝██║██╔═══██╗████╗  ██║"
	@echo "██║██╔██╗ ██║██║     █████╗  ██████╔╝   ██║   ██║██║   ██║██╔██╗ ██║"
	@echo "██║██║╚██╗██║██║     ██╔══╝  ██╔═══╝    ██║   ██║██║   ██║██║╚██╗██║"
	@echo "██║██║ ╚████║╚██████╗███████╗██║        ██║   ██║╚██████╔╝██║ ╚████║"
	@echo "╚═╝╚═╝  ╚═══╝ ╚═════╝╚══════╝╚═╝        ╚═╝   ╚═╝ ╚═════╝ ╚═╝  ╚═══╝"
	@echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
	@echo ""
	@echo "$(RED)╔═══════════════════════════║COMMANDS║═══════════════════════╗$(RESET)"
	@echo "$(RED)║   - make stop                                              ║$(RESET)"
	@echo "$(RED)║   - make down                                              ║$(RESET)"
	@echo "$(RED)║   - make up                                                ║$(RESET)"
	@echo "$(RED)║   - make ps                                                ║$(RESET)"
	@echo "$(RED)║   - make fclean                                            ║$(RESET)"
	@echo "$(RED)║   - make clean                                             ║$(RESET)"
	@echo "$(RED)║   - make rvolumes                                          ║$(RESET)"
	@echo "$(RED)║   - make re                                                ║$(RESET)"
	@echo "$(RED)║   - make help                                              ║$(RESET)"
	@echo "$(RED)║   - make info                                              ║$(RESET)"
	@echo "$(RED)╚════════════════════════════════════════════════════════════╝$(RESET)"

.PHONY: help rvolumes ps up down stop re clean fclean info all
