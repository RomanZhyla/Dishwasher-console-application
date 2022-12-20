# Dishwasher console application
The diswasher will allow starting a wash cycle runs one of the following cycles:
- Regular wash
- Pan & pots
- Dry cycle

# Installation

Open a terminal in the project folder and run following command:

    docker-compose up -d

Once everything is finish downloading. You can execute PHP command line application by:

    docker-compose exec cli bash

After that, you can run wash cycle by command.

    php app/control.php

For start a wash cycle

    php app/control.php --mode=[mode_number]

For getting the help you can use:

    php app/control.php --help