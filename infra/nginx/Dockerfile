ARG NODE_VERSION
ARG NGINX_VERSION
FROM node:${NODE_VERSION} as node
FROM nginx:${NGINX_VERSION}
# FROM node:14.2-alpine as node
# FROM nginx:1.18-alpine
SHELL ["/bin/ash", "-oeux", "pipefail", "-c"]

ENV TZ=UTC

RUN apk update && \
  apk add --update --no-cache --virtual=.build-dependencies g++

# node command
COPY --from=node /usr/local/bin /usr/local/bin
# npm command
COPY --from=node /usr/local/lib /usr/local/lib
# nginx config file
COPY myPortfolio/infra/nginx/default.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p /var/www/myPortfolio
ADD ./myPortfolio /var/www/myPortfolio

WORKDIR /var/www/myPortfolio