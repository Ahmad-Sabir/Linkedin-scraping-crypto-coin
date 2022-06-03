@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../vendor/dbrekelmans/bdi/bdi.phar
php "%BIN_TARGET%" %*
