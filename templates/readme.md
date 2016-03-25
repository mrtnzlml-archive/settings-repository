# PhpStorm Live Templates



## Installation

First, find your configuration folder.

	Windows: <your home directory>\.WebIde<version>\config
	Linux: ~\.WebIde<version>\config
	MacOS: ~/Library/Preferences/WebIde<version>

On my linux, it would be <code>~/.WebIde70/config</code> so you have to adjust commands to your platform. There is a <code>templates/</code> directory. It contains XML files with Live Templates.

Create a git repository in the `templates/` dir and pull the templates

	$ cd ~/.WebIde50/config/templates/
	$ git init
	$ git remote add origin git://github.com/fprochazka/phpstorm-livetemplates.git
	$ git pull origin master

If this wouldn't work, you should just backup your templates, clone the repo and merge them manually.


## Default Shortcuts

* Insert Live Template - <code>CTRL+J</code>
* Surround with Live Template - <code>CTRL+ALT+J</code>



## PHP Templates

### pri, pro, pub

Private, protected and public method

### con

Constructor, that calls parent

### thr

Throw expression

### try

Surround code with <code>try {}</code> expression


### ob

Surround code with output buffering

### fc

Surround statement with function call

### sta

Static function

The <code>$VISIBILITY$</code> variable within live template uses <code>enum()</code> helper, so you can choose visibility easily

![enum](https://dl.dropbox.com/u/32120652/phpstorm-livetemplate-visibilityselect.png)



## Nette Templates

### com

Nette component factory

### form

Component factory with basic Form definition and signal handler

### ren, act

Render and action method

### inj

Inject method for Nette presenter

### sup

Startup method

### sig

Signal method of Nette PresenterComponent

### att

Attached event on Nette component.

### obj

Code for including Nette\ObjectMixin into current class



## PHPUnit Templates

### test

Default empty test function for PhpUnit (todo: more)



## jQuery Templates

### fn

Common pattern for creating jQuery modules
