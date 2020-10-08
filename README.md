# Assessment

The goal of this exercise is to simply assess how you approach solving problems. Below are two prompts for you to work through. Here are a few guiding steps:

- Clone this repository.
- Create your own working branch.
- Put your code for each prompt into their own subfolders.
- Commit + push at points that feel natural for you to do so.
- Create a pull request with Tommy (GitHub username is `tgmcguire`) as the reviewer when you're finished. In your PR notes, let us know how long you worked on each prompt.

---

## Prompt 1: PHP

You are a mechanic who works on anything with an engine. This could be a motorcycle, a car, a truck, or even an airplane – but they are all instances of a "Vehicle". In order to run, a Vehicle needs keys in the ignition, and gas in the tank. However, each vehicle type may not have both of those things by default. As the mechanic, it’s your job to start the vehicle, such that I can execute `run()` on each one so they all return `vrooom`.

Your program must include this block of code:

```php
$vehicles = [
	new Car(),
	new Boat(),
	new Airplane(),
];
```

Here are the defaults for each vehicle type:

| Vehicle  | Has Keys? | Has Fuel? |
|----------|-----------|-----------|
| Car      | Yes       | No        |
| Boat     | No        | Yes       |
| Airplane | No        | No        |

## Prompt 2: Front-end

It's 2005 and a client wants to keep their site updated for each of the seasons. They want to preview their site before committing to a theme. Create a UI where they can select the style theme from a dropdown and see a preview of their site. It is totally up to you how the styles are stored. When the user makes the selection, persist the value in any way you see fit.
