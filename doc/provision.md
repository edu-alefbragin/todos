# Provision log

On remote:

```bash
apt-get update
apt-get upgrade

# Configuration file '/etc/cloud/cloud.cfg'
#  ==> Modified (by you or by a script) since installation.
#  ==> Package distributor has shipped an updated version.
#    What would you like to do about it ?  Your options are:
#     Y or I  : install the package maintainer's version
#     N or O  : keep your currently-installed version
#       D     : show the differences between the versions
#       Z     : start a shell to examine the situation
#  The default action is to keep your current version.
# *** cloud.cfg (Y/I/N/O/D/Z) [default=N] ? Y

# OpenSSH? Install mainteiner version

apt-get dist-upgrade -y
apt-get install -y nginx
apt-get install -y php-fpm
```

On local:

```bash
scp ./scripts/provision.d/todos root@188.68.220.222:/etc/nginx/sites-available/todos
```

On remote:

```bash
mkdir --parent /var/www/todos
ln --force --symbolic /etc/nginx/sites-available/todos /etc/nginx/sites-enabled/todos
rm /etc/nginx/sites-enabled/default
service nginx reload
```

On local:

```bash
rsync --archive --recursive --delete . root@188.68.220.222:/var/www/todos
```

