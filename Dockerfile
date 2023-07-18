FROM php:8.2-cli-alpine

RUN apk update && \
    apk add zsh git vim zsh-autosuggestions zsh-syntax-highlighting bind-tools openssh curl && \
    rm -rf /var/cache/apk/*
RUN sh -c "$(wget https://raw.github.com/robbyrussell/oh-my-zsh/master/tools/install.sh -O -)"
RUN echo "source /usr/share/zsh/plugins/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh" >> ~/.zshrc && \
echo "source /usr/share/zsh/plugins/zsh-autosuggestions/zsh-autosuggestions.zsh" >> ~/.zshrc && \
echo "cd /home/php/cleanCode" >> ~/.zshrc && \
echo "echo \" _____ _  _    ___  \"" >> ~/.zshrc && \
echo "echo \"| ____| || |  / _ \ \"" >> ~/.zshrc && \
echo "echo \"| |__ | || |_| | | |\"" >> ~/.zshrc && \
echo "echo \"|___ \|__   _| | | |\"" >> ~/.zshrc && \
echo "echo \" ___) |  | | | |_| |\"" >> ~/.zshrc && \
echo "echo \"|____/   |_|  \___/ \"" >> ~/.zshrc && \
echo "echo \"Visit us on https://www.540deg.com/\"" >> ~/.zshrc && \
echo "echo \"Git repository: https://github.com/540/CleanCode\"" >> ~/.zshrc

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir cleanCode
