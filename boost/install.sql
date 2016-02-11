BEGIN;
CREATE TABLE events_events (
    id INTEGER NOT NULL,
    eventName VARCHAR(32) NOT NULL,
    eventLocation VARCHAR(32) NOT NULL,
    imageID INTEGER,
    eventDate INTEGER NOT NULL,
    ticketPrices TEXT NOT NULL,
    ticketLocation TEXT NOT NULL,
    openTime INTEGER,
    startTIme INTEGER NOT NULL,
    eventRestrictions TEXT,
    artistDetails TEXT,
    PRIMARY KEY (id)
);

CREATE TABLE events_log (
    id INTEGER NOT NULL,
    username VARCHAR(32) NOT NULL,
    activity VARCHAR(32) NOT NULL,
    timePerformed INTEGER NOT NULL,
    eventID INTEGER NOT NULL,
    PRIMARY KEY (id)
);
COMMIT;