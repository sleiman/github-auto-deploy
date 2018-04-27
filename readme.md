# Auto Deploy!
This a simple how to guide to easily deploy using Github Webhooks 

## Setup

1.  Add deploy.php at the root of your project folder
2.  Add your server SSH key to the repo 
3.  Create a "push" webhook  in the repo
	4. Set the Payload URL as the public URL of deploy.php (https://domain.com/deploy.php)
	5. Set the Content Type as application/json
	6. Save the webhook
4.  Using SSH to connect to your server run this config 
	5. git config core.fileMode false
	6. You can now chmod your files to 744 or 755 
