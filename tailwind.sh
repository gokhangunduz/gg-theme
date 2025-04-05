#!/bin/bash

if [ ! -f "./tailwindcss" ]; then
  echo "TailwindCSS CLI not found, downloading..."
  curl -sLO https://github.com/tailwindlabs/tailwindcss/releases/latest/download/tailwindcss-macos-arm64
  chmod +x tailwindcss-macos-arm64
  mv tailwindcss-macos-arm64 tailwindcss
else
  echo "TailwindCSS CLI found, working with existing file."
fi

./tailwindcss -i ./assets/css/tailwind.css -o ./assets/css/style.css -w -m