# Deployment

Configure deployment scripts:

```bash
cp ./scripts/config_remote.example.sh ./scripts/config_remote.sh
vi ./scripts/config_remote.sh
```

Provision remote host:

```bash
./scripts/provision_remote
```

Deploy service:

```bash
./scripts/deploy_remote
```
