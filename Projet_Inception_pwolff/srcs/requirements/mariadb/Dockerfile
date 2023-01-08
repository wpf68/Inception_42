# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: pwolff <pwolff@student.42mulhouse.fr>>     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/01/05 14:08:06 by pwolff            #+#    #+#              #
#    Updated: 2023/01/05 14:08:09 by pwolff           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# https://wiki.alpinelinux.org/wiki/MariaDB
FROM alpine:3.14

LABEL maintainer="pwolff@student.42mulhouse.fr"

RUN apk update && apk upgrade && \
    apk add --no-cache mariadb mariadb-client
RUN mkdir -p /run/mysqld && \
	chown -R mysql:mysql /run/mysqld

COPY ./tools/start.sh /
EXPOSE	3306

ENTRYPOINT ["sh", "/start.sh"]
