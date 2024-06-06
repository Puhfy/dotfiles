sudo pacman -S xmonad polybar discord firefox rofi neofetch flameshot neovim alacritty xclip feh git
yay -S oh-my-zsh-git visual-studio-code-bin cava tty-clock 
cd /tmp/
git clone --depth=1 https://github.com/pijulius/picom.git
cd picom/
git submodule update --init --recursive
meson --buildtype=release . build
sudo ninja -C build install
cd ~
git clone https://github.com/Puhfy/dotfiles/
cd dotfiles
sudo yes | cp -rf ./.config ../
