#!/bin/bash
nginx -t
exec nginx -g "daemon off;"