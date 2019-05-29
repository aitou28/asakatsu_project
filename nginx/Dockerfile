FROM alpine:3.9

# nginxのインストール
RUN apk update && \
    apk add --no-cache nginx

RUN apk --update add tzdata && \
    cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
    apk del tzdata && \
    rm -rf /var/cache/apk/*

# ドキュメントルート
COPY default.conf /etc/nginx/conf.d/default.conf

# ポート設定
EXPOSE 80

RUN mkdir -p /run/nginx

# フォアグラウンドでnginx実行
CMD nginx -g "daemon off;"

WORKDIR /var/www
