# どのイメージを基にするか
FROM alpine:3.8

#nginxのインストール
RUN apk update && \
    apk add --no-cache nginx

#ドキュメントルート
ADD app /asakatsu
ADD default.conf /etc/nginx/conf.d/default.conf

#ポート設定
EXPOSE 80

RUN mkdir -p /run/nginx


