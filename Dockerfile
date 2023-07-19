FROM php:8.2-cli-alpine

RUN apk update && \
    apk add zsh git vim zsh-autosuggestions zsh-syntax-highlighting bind-tools openssh curl && \
    rm -rf /var/cache/apk/*
RUN sh -c "$(wget https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh -O -)"
RUN echo "source /usr/share/zsh/plugins/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh" >> ~/.zshrc && \
echo "source /usr/share/zsh/plugins/zsh-autosuggestions/zsh-autosuggestions.zsh" >> ~/.zshrc && \
echo "cd /home/php/cleanCode" >> ~/.zshrc && \
echo " _____ _  _    ___  " && \
echo "| ____| || |  / _ \ " && \
echo "| |__ | || |_| | | |" && \
echo "|___ \|__   _| | | |" && \
echo " ___) |  | | | |_| |" && \
echo "|____/   |_|  \___/ " && \
echo "Visit us on https://www.540deg.com/" && \
echo "Git repository: https://github.com/540/CleanCode"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir cleanCode
