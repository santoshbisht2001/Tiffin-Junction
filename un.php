<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiffin Provider Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('anIndianThali.png');
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        form {
            background-color: antiquewhite;
            padding: 100px;
            border-radius: 8px;
            width: 600px;
            opacity: 80%;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 15px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: yellow;
            color: black;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: orange;
        }
    </style>
</head>
<body>
    <form>
        <h2>Tiffin Provider Details</h2>
        <label for="name">Business Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="location">Service Area:</label>
        <input type="text" id="location" name="location" required>

        <label for="cuisine">Cuisine Type:</label>
        <select id="cuisine" name="cuisine" required>
            <option value="indian">North Indian</option>
            <option value="chinese">Chinese</option>
            <option value="italian">South Indian</option>
        </select>

        <label for="contactatrestaurant">Contact at Restaurant:</label>
        <input type="tel" id="contactatrestaurant" name="contactatrestaurant" required>
    
        <h2>FSSAI Certificate Details</h2>

        <label for="fssaicertificate">FSSAI Certificate:</label>
        <input type="file" id="fssaicertificate" name="fssaicertificate" required>

        <label for="validupto">Valid Upto:</label>
        <input type="date" id="validupto" name="validupto" required>
        
        <h2>Restaurant Owner Details</h2>

        <label for="ownerphonenumber">Owner's Contact:</label>
        <input type="tel" id="ownerphonenumber" name="ownerphonenumber" required>

        <label for="ownername">Owner's Name:</label>
        <input type="text" id="ownername" name="ownername" required>

        <label for="owneremail"> Owner's Email:</label>
        <input type="email" id="owneremail" name="owneremail" required>


        <button type="submit">Submit</button>
    </form>
    
</body>
</html>
<!-- $sql = "INSERT INTO `tiffin`.`merchant` ( `company_name`, `email`, `password`) VALUES ('$company_name', '$email', '$password')"; -->