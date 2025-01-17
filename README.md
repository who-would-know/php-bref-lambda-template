# Basic Template for PHP using bref to host in AWS Lambda

## Steps

- Follow bref setup. What's next select "Get started with any PHP framework -https://bref.sh/docs/setup

- Clone this repo before Deployment step
- More to come like adding S3 for static images/files, etc

## What is all in this repo?

### index.php is your entry point

- All traffic goes to index.php so we had to create "routes" like most frameworks do.
- We did it manually with switch statements.
  You could have installed a package with composer many out there - https://packagist.org/

### views folder

- Contacts all your pages. Any you add just remember to updated your index.php with a "route" aka switch case

### views/templates folders

- Where all your header and footer stuff goes.
- Included a template-blank.php you can copy to your /views to create a new page

### vendor folder

- Where all your packages go when installing with composer. bref is in there from the bref install - https://getcomposer.org/

### public folder

- Where I stored an example css file which is public and static. In future should have serverless-bref created a S3 bucket and store that folder in there. Will update when I get there.

### That's all folks, have fun!
