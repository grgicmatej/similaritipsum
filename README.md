# Similaritipsum App

## Description | How it works

The way we calculate the score is to take the first letter from each individual word. Let's convert that letter according to the ASCII code. The final results are compared and the ratio of the entered texts is displayed.

There are several conditions for this comparator to work, first check the number of words in the first word stram and the number of words in the other, if one of the streams contains a larger number of words, that "excess" of words will be ignored.

Also, there is one specific symbol/character that does not count towards the total score.

--

### How to get results

The application has two ways of getting popularity results.
First way is to enter a two sets of words in the form on the front/home page of the app,
app will calculate the ratio and'll show it on a new page.
Another way is using a new API endpoint of this app. URL of this endpoint is '/api/getResultApi',
app will return results in a JSON response.

## How to install app

1. Git clone this repo
2. Run composer install
3. copy/rename .env.example to .env
4. php artisan key:generate
5. php artisan serve

#### That's it!

## important API information

- Allowed methods: GET
- Number of parameters: two ("words_stream_1" and "words_stream_2")
- Header must include key "key" with whatever value, except null.

## App screenshots

### Homepage
![Screen Shot 2022-10-15 at 09 47 31](https://user-images.githubusercontent.com/44585012/195975706-41421982-7288-48df-a82f-f5b16f9236db.png)

### Results
![Screen Shot 2022-10-15 at 09 48 07](https://user-images.githubusercontent.com/44585012/195975755-eab5dfc9-c13e-4281-acb2-a5e638f96ec9.png)

### How to use
![Screen Shot 2022-10-15 at 09 48 29](https://user-images.githubusercontent.com/44585012/195975778-03a1f6b0-e39c-4cb1-9246-d47fdd4324e8.png)

### API
![Screen Shot 2022-10-15 at 09 49 01](https://user-images.githubusercontent.com/44585012/195975787-86d6e0ed-3f8e-40df-96a2-860df3e2e22f.png)

### Postman screenshots (correct headers and method)
![Screen Shot 2022-10-15 at 09 50 40](https://user-images.githubusercontent.com/44585012/195975868-b640f188-043d-4f51-9334-2123bed3b9e0.png)

### Postman screenshots (missing key in header)
![Screen Shot 2022-10-15 at 09 51 49](https://user-images.githubusercontent.com/44585012/195975914-27a0b33d-fc85-43f5-828b-913145dad075.png)

### Postman screenshots (wrong method)
![Screen Shot 2022-10-15 at 09 52 48](https://user-images.githubusercontent.com/44585012/195975933-eb483559-56f6-4e5c-b1dd-c2e79638fa26.png)

### Postman screenshots (missing params)
![Screen Shot 2022-10-15 at 09 53 22](https://user-images.githubusercontent.com/44585012/195975953-193edee9-0a93-4107-a852-8e78d967ae64.png)

--
### Thats it, have fun!
