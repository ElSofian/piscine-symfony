#!/bin/sh

curl -s -I $1 | grep location | cut -d' ' -f2
