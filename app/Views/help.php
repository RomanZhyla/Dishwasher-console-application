
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⠟⠛⠛⠛⠛⠻⠿⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡿⠟⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⠻⢿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⡿⠋⠀⠀⠀⠀⣀⣤⣶⣶⣶⣶⣶⣶⣤⣀⠀⠀⠀⠀⠙⢿⣿⣿⣿⣿
⣿⣿⣿⠏⠀⠀⠀⢀⣴⣿⠿⠛⠉⠁⠀⠀⠈⠉⠛⠿⣿⣦⡀⠀⠀⠀⠹⣿⣿⣿
⣿⣿⠏⠀⠀⠀⣴⣿⡟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢻⣿⣦⠀⠀⠀⠹⣿⣿
⣿⡏⠀⠀⠀⣼⣿⣿⠀⠀⠀⢠⣾⣿⣿⣿⣿⣷⡄⠀⠀⠀⣿⣿⣧⠀⠀⠀⢹⣿
⣿⠁⠀⠀⢸⣿⣿⣿⣷⣶⣶⣿⣿⣿⠿⠛⠉⠁⠀⠀⣀⣴⣿⣿⣿⡇⠀⠀⠈⣿
⣿⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⠏⠀⠀⠀⣠⣴⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⣿
⣿⡀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⠀⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⡇⠀⠀⢀⣿
⣿⣇⠀⠀⠀⢻⣿⣿⣿⣿⣿⣿⣿⣧⣤⣤⣼⣿⣿⣿⣿⣿⣿⣿⡟⠀⠀⠀⣸⣿
⣿⣿⣆⠀⠀⠀⠻⣿⣿⣿⣿⣿⣿⠏⠁⠈⠹⣿⣿⣿⣿⣿⣿⠟⠀⠀⠀⣰⣿⣿
⣿⣿⣿⣆⠀⠀⠀⠈⠻⣿⣿⣿⣿⣆⡀⢀⣰⣿⣿⣿⣿⠟⠁⠀⠀⠀⣰⣿⣿⣿
⣿⣿⣿⣿⣷⣄⠀⠀⠀⠀⠉⠛⠿⠿⠿⠿⠿⠿⠛⠉⠀⠀⠀⠀⣠⣾⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣷⣦⣄⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣠⣴⣾⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣶⣦⣤⣤⣤⣤⣴⣶⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿

Console application for controlling and starting the dishwasher.

The system supports three modes:
№1 Regular wash (water amount: 500 ml | temp: 50°C | time: 45 min | With drying)
№2 Pan & Pots (water amount: 800 ml | temp: 65°C | time: 100 min | With drying)
№3 Dry cycle (Drying only)

To start the mode, please use --mode=[mode_number]

For example, for Regular wash, execute the command
php app/control.php --mode=1

