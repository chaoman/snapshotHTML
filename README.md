# snapshotHTML
A website that takes a snapshop of a website and output to HTML, PNG and PDF format. It uses Qt's wkhtmltoimage engine. 

# Pre-requisite
It only runs on Ubuntu server with the following packages

sudo apt-get install openssl build-essential xorg libssl-dev
sudo apt-get install wkhtmltopdf

The shell command that runs wkhtmltopdf is $ xvfb-run wkhtmltopdf --encoding utf-8
