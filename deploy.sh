#!/bin/bash
# DevJMNZ LLC — Deploy script
# Usage: ./deploy.sh

set -e

REMOTE_USER="u703977901"
REMOTE_HOST="46.202.182.199"
REMOTE_PORT="65002"
REMOTE_PATH="/home/u703977901/domains/devjmnz.tech/public_html/wp-content/themes/ejmnz-theme"
SSH_ALIAS="hostinger-ejmnz"

echo "🔨 Building assets..."
npm run build

echo "📦 Syncing build to server..."
rsync -avz --progress -e "ssh -p $REMOTE_PORT" \
  public/build/ \
  $REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH/public/build/

echo "🧹 Clearing Acorn view cache..."
ssh $SSH_ALIAS "wp acorn view:clear --path=/home/u703977901/domains/devjmnz.tech/public_html 2>&1"

echo "✅ Deploy complete — https://devjmnz.tech"
