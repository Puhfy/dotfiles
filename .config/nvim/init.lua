vim.opt.clipboard = "unnamedplus"

vim.opt.tabstop = 4
vim.opt.shiftwidth = 4
vim.opt.expandtab = true

vim.opt.wrap = false

vim.opt.splitright = true
vim.opt.splitbelow = true

vim.opt.relativenumber = true
vim.opt.number = true

vim.opt.scrolloff = 999
vim.opt.virtualedit = "block" 

vim.opt.inccommand = "split"
vim.opt.termguicolors = true

local lazypath = vim.fn.stdpath("data") .. "/lazy/lazy.nvim"
if not (vim.uv or vim.loop).fs_stat(lazypath) then
  vim.fn.system({
    "git",
    "clone",
    "--filter=blob:none",
    "https://github.com/folke/lazy.nvim.git",
    "--branch=stable", -- latest stable release
    lazypath,
  })
end
vim.opt.rtp:prepend(lazypath)

require("lazy").setup({
    "rebelot/kanagawa.nvim"
})

vim.cmd("colorscheme kanagawa-dragon")
