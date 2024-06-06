import XMonad


import XMonad.Util.EZConfig
-- NOTE: Only needed for versions < 0.18.0! For 0.18.0 and up, this is
-- already included in the XMonad import and will give you a warning!
-- import XMonad.Operations.unGrab

import XMonad.Layout.LayoutCombinators
import XMonad.Layout.NoBorders (noBorders, smartBorders)
import XMonad.Layout.Fullscreen (fullscreenFull, fullscreenSupport)
import XMonad.Layout.Grid (Grid(..))
import XMonad.Layout.TwoPane (TwoPane(..))
import XMonad.Layout.Tabbed (simpleTabbed)
import XMonad.Layout.Spacing
import XMonad.Hooks.EwmhDesktops
import XMonad.Hooks.DynamicLog
import XMonad.Hooks.StatusBar
import XMonad.Hooks.StatusBar.PP

myXmobarPP :: PP
myXmobarPP = def









--myLayout =
--  smartBorders $ -- layouts begin below
--  noBorders Full
--  ||| Tall 1 (3/100) (1/2)
--  ||| TwoPane (15/100) (55/100)
--  ||| Mirror (Tall 1 (10/100) (60/100))
--  ||| Grid
--  ||| simpleTabbed
myLayout = Grid

main :: IO ()
main = xmonad . ewmhFullscreen . ewmh . withEasySB (statusBarProp "xmobar" (pure myXmobarPP)) defToggleStrutsKey $ myConfig

myConfig = def
    { modMask = mod4Mask
    , layoutHook = spacingWithEdge 6 $ myLayout
    , terminal = "alacritty"
    , borderWidth = 3
    , focusedBorderColor = "#3bc4cd"
    }
 `additionalKeysP`
    [ ("M-S-z", spawn "xscreensaver-command -lock")
    , ("M-C-s", unGrab *> spawn "scrot -s"        )
    , ("M-f"  , spawn "firefox"                   )
    , ("M-d"  , spawn "rofi -show run"                      )
    ]





































