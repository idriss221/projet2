CREATE TABLE copie_examen (
    id SERIAL PRIMARY KEY,
    date_depot TIMESTAMP NOT NULL,
    date_limite TIMESTAMP NOT NULL,
    note_brute NUMERIC(4, 2) NOT NULL CHECK (
        note_brute >= 0
        AND note_brute <= 20
    ),
    note_finale NUMERIC(4, 2),
    penalite_appliquee BOOLEAN DEFAULT FALSE
);