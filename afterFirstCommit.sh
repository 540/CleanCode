#!/bin/zsh

echo -n "Write your email for github: "
read email
git config --global user.email $email

echo -n "Write your username for github: "
read username
git config --global user.name $username
