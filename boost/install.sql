BEGIN;

CREATE SEQUENCE events_seq;

CREATE TABLE events_events (
    id INTEGER NOT NULL default nextval('events_seq'::regclass),
    eventName VARCHAR(255) NOT NULL,
    eventDate INTEGER NOT NULL,
    ticketInformation TEXT NOT NULL,
    openTime TEXT,
    startTime TEXT NOT NULL,
    eventRestrictions TEXT,
    artistDetails TEXT,
    imageUrl TEXT,
    hidden TEXT,

    PRIMARY KEY (id)
);



COMMIT;