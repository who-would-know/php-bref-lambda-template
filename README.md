# Basic Template for PHP using bref to host in AWS Lambda

## Steps

- Follow bref setup. What's next select "Get started with any PHP framework? https://bref.sh/docs/setup
- After Deployment section/deploying the sample, make a copy of the serverless.yml file to reference some settings you might want to change for your environment (see NOTE step below)
- Click on <>Code and Download Zip this repo or clone it from this github page.
- Grab and move to your working bref directory created above:

  - files: index.php & serverless.yml
  - folders: public/ and views/

- For the S3/Cloudfront part (under public folder & S3 bucket section) install following:

```
serverless plugin install -n serverless-lift
```

- NOTE: The serverless.yml file has some settings from my AWS environment & PHP version. You might want to change following to match your existing serverless.yml file:

```
provider:
  name: aws
  region: us-east-1
```

```
api:
  ...
  runtime: php-84-fpm
```

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

### public folder & S3 Bucket

- Where I stored an example css file which is public and static.
- I followed bref doc https://bref.sh/docs/use-cases/websites to update the serverless.yml file to push my public/css -> /css to an S3 bucket and use Cloudfront to point my API and S3. This was all done after just adding following to my serverless.yml file:

```
# Static Pages
constructs:
  website:
    type: server-side-website
    assets:
      "/css/*": public/css
```

### serverless.yml file

- Following bref install above, when you init bref it creates a serverless.yml file. This has instructions on what to launch into AWS.

### composer.json & composer.lock

- PHP package manager, lists all the dependencies for this project

### package.json & package-lock.json

- npm install package files required

### That's all folks, have fun!
