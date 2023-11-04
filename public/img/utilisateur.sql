---Création de l'utilisateur
    /*
        1) Choisir un nom d'utilisateur
        2)choisir une méthode d'authentification(base de donnée ou system)
        3)Choisir les tablespace que l'utilisateur pour utiliser
        4)Definir les quotas sur chaque tablespace
        5)Assigner les rôles et privileges à l'utilisateur
    */
---Modification d'un utilisateur
        --Mofication du mot de passe
            alter user login_user by nouveau_login
        ---Modifier le quotas
            alter user nom_user
                QUOTA 1M on nom_tablespace1
                QUOTA 1M on nom_tablespace2
---Desactiver un utilisateur
    alter user nom_user account lock ;
---Supprimer un utilisateur avec le schema correspondant
    drop user nom_user cascade;
---Des informations sur les utilisateurs
    desc dba_users;
---Les types de privileges sont :
    /*
        1) les privilèges au niveau system
        2) les privilèges au niveau object
    */
---les privilèges se trouvent au niveau : 
    /*
        database(alter database)
        session(create session,alter session)
        table(create,alter,update,drop,select)
        session(create,alter,drop,unlimited)
    */
---Assigner des privlèges objet à utilisateur
    /*
        grant
            -alter
            -reference
            -select
            -update
            -delete
            -insert
            on sys.nom_table to nom_user
    */
---Créer des rôles et assigner des privilèges
    --Exemple
    create role nom_role
    grant select,update,insert,delete,alter on nom_table to nom_role;
--Affecter le rôle à un utilisateur
    grant nom_role to nom_user;
--Les trois rôles du system créer par l'oracle
    connect
    DBA,
    resource
--Liste des roles assignés à un utilisateur
    dba_role_privs et user_role_privs
    --Exemple 
        select * from dba_role_privs where grantee = 'user';
--Liste des privilèges objet assigné à un utilisateur
    dba_tab_privs, all_tab_privs, user_tab_privs
    ---Exemple 
        select * from dba_tab_privs where grantee='user'; 
--Liste des role assignés à l'utilisateur aucours de sa session(connecté) est visible par
    select * from session_roles;
--Liste des privilèges assigné à l'utilisateur aucours de sa session(connecté) est visible par
    select * from session_privs;
--Supprimer un role
    drop role nom_role;
--Retirer des privilèges system
    

