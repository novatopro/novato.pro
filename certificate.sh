certbot certonly \
  --non-interactive \
  --agree-tos \
  --email "admin@novato.pro" \
  --preferred-challenges dns \
  --authenticator dns-porkbun \
  --dns-porkbun-credentials "/porkbun-credentials.ini" \
  --dns-porkbun-propagation-seconds 60 \
  -d "*.novato.pro" \
  -d "novato.pro"
