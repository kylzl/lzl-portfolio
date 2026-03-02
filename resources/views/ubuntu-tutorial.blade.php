<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubuntu Server Setup Tutorial</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon_io/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/style.css')
</head>
<body>

    <x-header />

    <section class="hero tutorial-hero" id="about">
        <h1>Ubuntu Server Setup Guide</h1>
        <p>Complete tutorial for setting up MySQL, Nginx, and Laravel on Ubuntu servers.</p>
    </section>

    <section id="tutorial-content">
        <h2 class="section-heading">01 | Access Server</h2>
        <div class="code-block-wrapper">
            <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
            <pre class="code-pre">ssh root@server_ip</pre>
        </div>

        <h2 class="section-heading">02 | Add Server User</h2>
        
        <h3 class="subsection-heading">Create a New User</h3>
        <div class="info-box">
            <p class="info-box-title">Create a new non-root user for server management. Replace "serveruser" with your desired username.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo adduser serveruser</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Add User to Sudo Group</h3>
        <div class="info-box">
            <p class="info-box-title">Grant sudo privileges to the new user so they can run administrative commands with the sudo prefix.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo usermod -aG sudo serveruser</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Switch to New User</h3>
        <div class="info-box">
            <p class="info-box-title">Switch to the new user account. You can use this for future server management tasks.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">su - serveruser</pre>
            </div>
        </div>

        <h2 class="section-heading">03 | How to Install MySQL</h2>
        
        <h3 class="subsection-heading">Update System Packages</h3>
        <div class="info-box">
            <p class="info-box-title">Update the system package index to ensure you have the latest version information for all packages.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo apt update</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Upgrade System Packages</h3>
        <div class="info-box">
            <p class="info-box-title">Upgrade all installed packages to their latest versions. Choose to keep the local currently installed version when prompted.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo apt upgrade -y</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Install MySQL Server</h3>
        <div class="info-box">
            <p class="info-box-title">Install MySQL Server package on the system with automatic yes to all prompts.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo apt install mysql-server -y</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Start MySQL Service</h3>
        <div class="info-box">
            <p class="info-box-title">Start the MySQL service immediately.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo systemctl start mysql</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Enable MySQL on Startup</h3>
        <div class="info-box">
            <p class="info-box-title">Enable MySQL to start automatically when the system boots.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo systemctl enable mysql</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Check MySQL Status</h3>
        <div class="info-box">
            <p class="info-box-title">Verify that MySQL service is running properly.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo systemctl status mysql</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Secure MySQL Installation</h3>
        <div class="info-box">
            <p class="info-box-title">Run the security script to improve MySQL security by removing insecure defaults and restricting access.</p>
            <div class="code-block-wrapper with-spacing">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo mysql_secure_installation</pre>
            </div>
            <p class="info-box-title"><strong>When prompted, respond with these options:</strong></p>
            <ul>
                <li>VALIDATE PASSWORD COMPONENT → <strong>Yes</strong></li>
                <li>Password strength → <strong>2</strong></li>
                <li>Set root password → <strong>Yes</strong></li>
                <li>Remove anonymous users → <strong>Yes</strong></li>
                <li>Disallow root login remotely → <strong>Yes</strong></li>
                <li>Remove test database → <strong>Yes</strong></li>
                <li>Reload privilege tables → <strong>Yes</strong></li>
            </ul>
        </div>

        <h3 class="subsection-heading">Edit MySQL Configuration</h3>
        <div class="info-box">
            <p class="info-box-title">Edit the MySQL configuration file to allow remote connections. Open the config file with nano editor.</p>
            <div class="code-block-wrapper with-spacing">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo nano /etc/mysql/mysql.conf.d/mysqld.cnf</pre>
            </div>
            <p class="info-box-title"><strong>Inside the editor:</strong></p>
            <ul>
                <li>Find the line: <code class="code-inline">bind-address = 127.0.0.1</code></li>
                <li>Change it to: <code class="code-inline">bind-address = 0.0.0.0</code></li>
                <li>Save and exit: <strong>CTRL + X</strong> → <strong>Y</strong> → <strong>ENTER</strong></li>
            </ul>
        </div>

        <h3 class="subsection-heading">Restart MySQL Service</h3>
        <div class="info-box">
            <p class="info-box-title">Restart MySQL service to apply the configuration changes.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo systemctl restart mysql</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Database User Policy (Local vs Remote)</h3>

        <div class="info-box">
            <p class="info-box-title">Choose the correct MySQL user type depending on your deployment architecture.</p>

            <table class="tutorial-table">
                <tr>
                    <th>Type</th>
                    <th>Example</th>
                    <th>Guideline</th>
                </tr>

                <tr>
                    <td>✔ Local-only user (Recommended)</td>
                    <td><code class="code-inline">'app_user'@'localhost'</code></td>
                    <td>Safer and faster when Laravel and MySQL run on the same server.</td>
                </tr>

                <tr>
                    <td>⚠ Remote user (Avoid if unnecessary)</td>
                    <td><code class="code-inline">'app_user'@'%'</code></td>
                    <td>Allows external connections if MySQL port is exposed.</td>
                </tr>
            </table>

            <p>
                ✔ Use <strong>localhost</strong> for production droplets.<br>
                ✔ Use remote access only for external apps or database management tools.
            </p>
        </div>
        <h3 class="subsection-heading">Login to MySQL</h3>
        <div class="info-box">
            <p class="info-box-title">Connect to MySQL as the root user. You will be prompted to enter the root password you set during the security installation.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo mysql -u root -p</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Create Database User</h3>
        <div class="info-box">
            <p class="info-box-title">Create a new MySQL user for your application. Run this command inside the MySQL prompt.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">CREATE USER 'user01'@'localhost' IDENTIFIED BY 'P@ssword123';</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Grant Privileges</h3>
        <div class="info-box">
            <p class="info-box-title">Grant all database privileges to the new user. Run this command inside the MySQL prompt.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">GRANT ALL PRIVILEGES ON *.* TO 'user01'@'localhost' WITH GRANT OPTION;</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Flush Privileges</h3>
        <div class="info-box">
            <p class="info-box-title">Reload the privilege tables to apply the changes immediately. Run this command inside the MySQL prompt.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">FLUSH PRIVILEGES;</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Exit MySQL</h3>
        <div class="info-box">
            <p class="info-box-title">Exit the MySQL command prompt and return to the shell.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">\q;</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Test Connection</h3>
        <div class="info-box">
            <p class="info-box-title">Test the connection to MySQL with the newly created user from your local machine or another server.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">mysql -h ip_address -u user01 -p</pre>
            </div>
        </div>

        <h2 class="section-heading">04 | How to Install Nginx</h2>
        
        <h3 class="subsection-heading">Install Nginx Web Server</h3>
        <div class="info-box">
            <p class="info-box-title">Install Nginx web server package on the system.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo apt install nginx -y</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Start Nginx Service</h3>
        <div class="info-box">
            <p class="info-box-title">Start the Nginx service immediately.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo systemctl start nginx</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Enable Nginx on Startup</h3>
        <div class="info-box">
            <p class="info-box-title">Enable Nginx to start automatically when the system boots.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo systemctl enable nginx</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Allow Nginx in Firewall</h3>
        <div class="info-box">
            <p class="info-box-title">Configure the firewall to allow HTTP and HTTPS traffic for Nginx.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo ufw allow 'Nginx Full'</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Enable UFW Firewall</h3>
        <div class="info-box">
            <p class="info-box-title">Enable the Ubuntu Firewall if it's not already enabled.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo ufw enable</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Check Firewall Status</h3>
        <div class="info-box">
            <p class="info-box-title">Verify that the firewall rules have been applied correctly.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo ufw status</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Test Nginx Installation</h3>
        <div class="info-box">
            <p>Open a web browser and navigate to: <code class="code-inline">http://your_droplet_ip</code></p>
            <p>You should see the default Nginx welcome page, confirming the installation was successful.</p>
        </div>

        <h2 class="section-heading">05 | How to Install Laravel</h2>
        
        <h3 class="subsection-heading">Install PHP and Extensions</h3>
        <div class="info-box">
            <p class="info-box-title">Install PHP and all required extensions needed for Laravel development.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo apt install php php-fpm php-mysql php-cli php-curl php-mbstring php-xml php-zip php-bcmath php-tokenizer php-common php-intl unzip curl -y</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Navigate to Home Directory</h3>
        <div class="info-box">
            <p class="info-box-title">Change to the home directory to download Composer.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">cd ~</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Download Composer Setup</h3>
        <div class="info-box">
            <p class="info-box-title">Download the official Composer installer from the getcomposer.org website.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">curl -sS https://getcomposer.org/installer -o composer-setup.php</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Install Composer</h3>
        <div class="info-box">
            <p class="info-box-title">Install Composer to make it globally available as a system-wide command.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Navigate to Web Directory</h3>
        <div class="info-box">
            <p class="info-box-title">Change to the /var/www directory where web applications are typically stored.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">cd /var/www</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Create New Laravel Project</h3>
        <div class="info-box">
            <p class="info-box-title">Create a new Laravel project. This will download Laravel and all dependencies using Composer. Replace "myproject" with your desired project name.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo composer create-project laravel/laravel myproject</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Set Directory Ownership</h3>
        <div class="info-box">
            <p class="info-box-title">Change the ownership of the Laravel project directory to the www-data user (Nginx's user).</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo chown -R www-data:www-data /var/www/myproject</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Set Storage Directory Permissions</h3>
        <div class="info-box">
            <p class="info-box-title">Make the storage directory writable so Laravel can write logs and cache files.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo chmod -R 775 /var/www/myproject/storage</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Set Bootstrap Cache Directory Permissions</h3>
        <div class="info-box">
            <p class="info-box-title">Make the bootstrap cache directory writable for Laravel to cache configuration files.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo chmod -R 775 /var/www/myproject/bootstrap/cache</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Edit Environment Configuration</h3>
        <div class="info-box">
            <p class="info-box-title">Edit the .env file to configure database connection settings for Laravel.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo nano /var/www/myproject/.env</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Configure Database Settings</h3>
        <div class="info-box">
            <p class="info-box-title">Update these lines in the .env file with your database credentials. Find these settings and modify them accordingly.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">DB_CONNECTION=mysql
DB_DATABASE=myproject
DB_USERNAME=user01
DB_PASSWORD=P@ssword123</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Create Nginx Server Block</h3>
        <div class="info-box">
            <p class="info-box-title">Create an Nginx configuration file for your Laravel application. This defines how Nginx will serve your Laravel project.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo nano /etc/nginx/sites-available/myproject</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Nginx Configuration Content</h3>
        <div class="info-box">
            <p class="info-box-title">Paste the following configuration into the editor and save. This configures Nginx to properly handle PHP requests and route them to Laravel.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">server {
    listen 80;
    server_name your_droplet_ip;

    root /var/www/myproject/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
    }

    location ~ /\.ht {
        deny all;
    }
}</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Enable Site Configuration</h3>
        <div class="info-box">
            <p class="info-box-title">Create a symbolic link to enable the Nginx site configuration.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo ln -s /etc/nginx/sites-available/myproject /etc/nginx/sites-enabled/</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Test Nginx Configuration</h3>
        <div class="info-box">
            <p class="info-box-title">Verify that your Nginx configuration file has no syntax errors.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo nginx -t</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Restart Nginx Service</h3>
        <div class="info-box">
            <p class="info-box-title">Apply the configuration changes by restarting Nginx.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">sudo systemctl restart nginx</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Run Database Migrations</h3>
        <div class="info-box">
            <p class="info-box-title">Execute Laravel database migrations to set up the required database tables for your application.</p>
            <div class="code-block-wrapper compact">
                <button class="copy-button" onclick="copyToClipboard(this)">Copy</button>
                <pre class="code-pre">php artisan migrate</pre>
            </div>
        </div>

        <h3 class="subsection-heading">Launch Your Application</h3>
        <div class="info-box">
            <p>Open a web browser and navigate to: <code class="code-inline">http://your_droplet_ip</code></p>
            <p>Your Laravel application should now be live and running on your Ubuntu server with MySQL, Nginx, and PHP fully configured.</p>
        </div>
    </section>

    <footer class="tutorial-footer">
        <div class="footer-links">
            <a href="https://www.facebook.com/kaye.liezl" target="_blank">Facebook</a>
            <span class="footer-divider">|</span>
            <a href="#" target="_blank">LinkedIn</a>
        </div>
        <p>SYSTEM TIMESTAMP: 2026 | ALL RIGHTS RESERVED BY LIEZL KAYE ROA.</p>
    </footer>

    <script>
    function copyToClipboard(button) {
        const codeBlock = button.parentElement.querySelector('pre');
        const text = codeBlock.textContent;

        navigator.clipboard.writeText(text).then(() => {

            const originalText = button.innerText;

            button.innerText = "Copied";
            button.style.backgroundColor = "var(--accent)";
            button.style.color = "#ffffff";

            setTimeout(() => {
                button.innerText = originalText;
                button.style.backgroundColor = "rgba(0,255,255,0.2)";
                button.style.color = "var(--accent)";
            }, 1500);

        }).catch(() => {
            button.innerText = "Failed";
        });
    }
    </script>

</body>
</html>









