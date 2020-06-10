# Some shortcuts for easier navigation & access
alias ..="cd .."
alias vm="ssh vagrant@127.0.0.1 -p 2222"
# Homestead shortcut
function homestead() {
 ( cd ~/Homestead && vagrant $* )
}