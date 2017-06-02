LearnCommand
============

A Symfony project created on June 1, 2017, 5:53 pm.


#Locations created files

All csv files are located in the AppBundle folder. I have also creatd an `Entity` folder with the User model that I used in the `CsvImportCommand class`.
In the folder `Commands` you can find both classes:
 - `CSVgetDataCommand.php`
 - `CsvImportCommand.php`

#explanation commands

## CSVgetDataCommand
The `CSVgetDataCommand.php` Command allows you to display the data of 2 CSV files located in in the Data folder.


This command can be used by typing the following into the console:
`php bin/console CSV:DisplayCommand`

## CsvImportCommand
This command allows you to import the data of a csv file to the database
For this command you need to have created a database named. This data comes from the  `userdata.csv` file

This command can be used by typing the following into the console:
`php bin/console csv:import`




