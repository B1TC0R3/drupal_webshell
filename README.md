# Drupal Webshell

## Disclaimer

The author of these files is not responsible for how you use these files.
This is a proof of concept and should not be used outside of simulated environments.


The webshell was tested on Drupal 8.
Newer version may not be compatible.
Additionally, the metasploit module `drupal_drupalgeddon2` allows unautenticated RCE against Drupal 8 instances already,
making this webshell pretty much obsolete.

## Requirements

- Admin access to the Drupal dashboard.
- tHE "Update Manager" extension is available on the Drupal instance.

## Installation

1. Set the correct Drupal core version in the file `./b1tc0r3_rce_module/b1tc0r3_rce.info.yml`.
2. Set your own password in the file `./b1tc0r3_rce_module/src/Controller/B1TC0R3RCEController.php`.
3. Compress all files into a tarball. This is the expected format for a Drupal module.

```bash
tar czf b1tc0r3_rce.tar.gz b1tc0r3_rce_module
```

4. On the Drupal dashboard, navigate to the "Extend" section.
5. Left-click on the descrption of "Update Manager". I know, Drupals extension menu is not the most well designed.
6. Click on "Configure".
7. Upload the file through the web form that should not be open.
8. Commands can now execute commands like this:

```bash
curl http://ADDR/b1tc0r3_rce?proof=PASSWORD&command=COMMAND
```

Note that executing commands does **not** require administrative access to the Drupal dashboard.
This kind of privilege is only required to upload the shell.
