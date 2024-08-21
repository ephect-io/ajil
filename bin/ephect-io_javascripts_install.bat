@echo off

cd vendor\ephect-io\javascripts
php use install:plugin %cd% %1 %2
