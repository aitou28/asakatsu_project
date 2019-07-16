FROM alpine:3.9

# nginxのインストール
RUN apk update && \
    apk add --no-cache \
    nginx=1.14.2-r1 && \
    apk --update add tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata && \
    rm -rf /var/cache/apk/* && \
    mkdir -p /run/nginx

# ポート設定
EXPOSE 80

WORKDIR /var/www

# フォアグラウンドでnginx実行
CMD nginx -g "daemon off;"
