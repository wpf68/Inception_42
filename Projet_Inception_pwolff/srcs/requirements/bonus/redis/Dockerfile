# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: pwolff <pwolff@student.42mulhouse.fr>>     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2023/01/05 14:08:21 by pwolff            #+#    #+#              #
#    Updated: 2023/01/08 19:03:43 by pwolff           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.13

RUN	apk update && apk upgrade && apk add --no-cache \
        redis

COPY tools/configure.sh /tmp/configure.sh
ENTRYPOINT ["sh", "/tmp/configure.sh"]
