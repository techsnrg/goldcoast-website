# Staging Deployment Setup

This repository is configured to auto-deploy the child theme to the staging WordPress site via GitHub Actions.

## What Deploys

Only this folder is deployed:

- `goldcoast-astra-child/`

It should be uploaded to the staging site's theme directory:

- `public_html/wp-content/themes/goldcoast-astra-child`

## Hostinger Details You Need

From Hostinger, collect these values for the staging site:

- SFTP host
- SFTP username
- SFTP password
- SFTP port

You will also need the remote target path:

- `/public_html/wp-content/themes/goldcoast-astra-child`

If your staging site uses a different document root, use that path instead.

## GitHub Secrets To Add

In GitHub:

1. Open the repository
2. Go to `Settings`
3. Go to `Secrets and variables > Actions`
4. Add these repository secrets:

- `HOSTINGER_SFTP_HOST`
- `HOSTINGER_SFTP_USERNAME`
- `HOSTINGER_SFTP_PASSWORD`
- `HOSTINGER_SFTP_PORT`
- `STAGING_THEME_PATH`

Recommended value for `STAGING_THEME_PATH`:

- `/public_html/wp-content/themes/goldcoast-astra-child`

## First-Time WordPress Step

After the first successful deploy:

1. Open staging WordPress admin
2. Go to `Appearance > Themes`
3. Activate `Gold Coast Astra Child`
4. Open or create the careers page
5. Set the page template to `Careers Page`

## Workflow Behavior

- Every push to `main` deploys the child theme to staging
- You can also run the workflow manually from the `Actions` tab

## Important Notes

- This only deploys theme files, not the database
- Content and page assignments still live in WordPress
- Test on staging before changing production
