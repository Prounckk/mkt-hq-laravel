FROM nginx:1.10

ADD ./ops/docker/vhost.conf /etc/nginx/conf.d/default.conf