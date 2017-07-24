<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AaaUser
 *
 * @ORM\Table(name="aaa_user")
 * @ORM\Entity
 */
class AaaUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="loginname", type="string", length=25, nullable=false)
     */
    private $loginname;

    /**
     * @var string
     *
     * @ORM\Column(name="oauth_provider", type="string", nullable=false)
     */
    private $oauthProvider;

    /**
     * @var string
     *
     * @ORM\Column(name="oauth_uid", type="string", length=100, nullable=false)
     */
    private $oauthUid;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=false)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disabled", type="boolean", nullable=true)
     */
    private $disabled;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="streetnr", type="string", length=255, nullable=true)
     */
    private $streetnr;

    /**
     * @var string
     *
     * @ORM\Column(name="plz", type="string", length=255, nullable=true)
     */
    private $plz;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="country", type="integer", nullable=false)
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date", nullable=false)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="phone1", type="string", length=255, nullable=true)
     */
    private $phone1;

    /**
     * @var string
     *
     * @ORM\Column(name="phone2", type="string", length=255, nullable=true)
     */
    private $phone2;

    /**
     * @var string
     *
     * @ORM\Column(name="phone3", type="string", length=255, nullable=true)
     */
    private $phone3;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mobil", type="string", length=255, nullable=true)
     */
    private $mobil;

    /**
     * @var string
     *
     * @ORM\Column(name="icqnr", type="string", length=255, nullable=true)
     */
    private $icqnr;

    /**
     * @var string
     *
     * @ORM\Column(name="ue30.de", type="string", length=255, nullable=true)
     */
    private $ue30.de;

    /**
     * @var string
     *
     * @ORM\Column(name="skypename", type="string", length=255, nullable=true)
     */
    private $skypename;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookname", type="string", length=255, nullable=true)
     */
    private $facebookname;

    /**
     * @var string
     *
     * @ORM\Column(name="homepage", type="string", length=255, nullable=true)
     */
    private $homepage;

    /**
     * @var string
     *
     * @ORM\Column(name="geschlecht", type="string", nullable=true)
     */
    private $geschlecht;

    /**
     * @var string
     *
     * @ORM\Column(name="geschlecht_partner", type="string", nullable=true)
     */
    private $geschlechtPartner;

    /**
     * @var string
     *
     * @ORM\Column(name="x_organisator", type="string", length=1, nullable=true)
     */
    private $xOrganisator;

    /**
     * @var string
     *
     * @ORM\Column(name="x_admin", type="string", length=1, nullable=true)
     */
    private $xAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="haarfarbe", type="string", length=30, nullable=true)
     */
    private $haarfarbe;

    /**
     * @var string
     *
     * @ORM\Column(name="augenfarbe", type="string", length=30, nullable=true)
     */
    private $augenfarbe;

    /**
     * @var string
     *
     * @ORM\Column(name="beziehungsstatus", type="string", length=2, nullable=true)
     */
    private $beziehungsstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="sternzeichen", type="string", length=2, nullable=true)
     */
    private $sternzeichen;

    /**
     * @var string
     *
     * @ORM\Column(name="gewicht", type="string", length=3, nullable=true)
     */
    private $gewicht;

    /**
     * @var string
     *
     * @ORM\Column(name="groesse", type="string", length=3, nullable=true)
     */
    private $groesse;

    /**
     * @var string
     *
     * @ORM\Column(name="x_alkohol", type="string", length=1, nullable=true)
     */
    private $xAlkohol;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kinder", type="string", length=1, nullable=true)
     */
    private $xKinder;

    /**
     * @var string
     *
     * @ORM\Column(name="x_eigener_haushalt", type="string", length=1, nullable=true)
     */
    private $xEigenerHaushalt;

    /**
     * @var string
     *
     * @ORM\Column(name="x_raucher", type="string", length=1, nullable=true)
     */
    private $xRaucher;

    /**
     * @var string
     *
     * @ORM\Column(name="schulabschluss", type="string", length=30, nullable=true)
     */
    private $schulabschluss;

    /**
     * @var string
     *
     * @ORM\Column(name="schulabschluss_partner", type="string", length=30, nullable=false)
     */
    private $schulabschlussPartner;

    /**
     * @var string
     *
     * @ORM\Column(name="musikrichtung", type="string", length=30, nullable=true)
     */
    private $musikrichtung;

    /**
     * @var string
     *
     * @ORM\Column(name="ueber_mich", type="text", length=65535, nullable=true)
     */
    private $ueberMich;

    /**
     * @var string
     *
     * @ORM\Column(name="ich_mag", type="string", length=255, nullable=true)
     */
    private $ichMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ich_mag_nicht", type="string", length=255, nullable=true)
     */
    private $ichMagNicht;

    /**
     * @var string
     *
     * @ORM\Column(name="hobbies", type="string", length=255, nullable=true)
     */
    private $hobbies;

    /**
     * @var string
     *
     * @ORM\Column(name="beruf", type="string", length=255, nullable=true)
     */
    private $beruf;

    /**
     * @var string
     *
     * @ORM\Column(name="lieblingsfilm", type="string", length=255, nullable=true)
     */
    private $lieblingsfilm;

    /**
     * @var string
     *
     * @ORM\Column(name="lieblingslied", type="string", length=255, nullable=true)
     */
    private $lieblingslied;

    /**
     * @var string
     *
     * @ORM\Column(name="lieblingsessen", type="string", length=255, nullable=true)
     */
    private $lieblingsessen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_aerobic", type="string", length=1, nullable=true)
     */
    private $xAerobic;

    /**
     * @var string
     *
     * @ORM\Column(name="x_ausgehen", type="string", length=1, nullable=true)
     */
    private $xAusgehen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_badmington", type="string", length=1, nullable=true)
     */
    private $xBadmington;

    /**
     * @var string
     *
     * @ORM\Column(name="x_basketball", type="string", length=1, nullable=true)
     */
    private $xBasketball;

    /**
     * @var string
     *
     * @ORM\Column(name="x_bergsteigen", type="string", length=1, nullable=true)
     */
    private $xBergsteigen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_biergarten", type="string", length=1, nullable=true)
     */
    private $xBiergarten;

    /**
     * @var string
     *
     * @ORM\Column(name="x_billiard", type="string", length=1, nullable=true)
     */
    private $xBilliard;

    /**
     * @var string
     *
     * @ORM\Column(name="x_bowling", type="string", length=1, nullable=true)
     */
    private $xBowling;

    /**
     * @var string
     *
     * @ORM\Column(name="x_camping", type="string", length=1, nullable=true)
     */
    private $xCamping;

    /**
     * @var string
     *
     * @ORM\Column(name="x_canyoning", type="string", length=1, nullable=true)
     */
    private $xCanyoning;

    /**
     * @var string
     *
     * @ORM\Column(name="x_computer", type="string", length=1, nullable=true)
     */
    private $xComputer;

    /**
     * @var string
     *
     * @ORM\Column(name="x_dart", type="string", length=1, nullable=true)
     */
    private $xDart;

    /**
     * @var string
     *
     * @ORM\Column(name="x_dating", type="string", length=1, nullable=true)
     */
    private $xDating;

    /**
     * @var string
     *
     * @ORM\Column(name="x_einkaufen", type="string", length=1, nullable=true)
     */
    private $xEinkaufen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_erotisches", type="string", length=1, nullable=true)
     */
    private $xErotisches;

    /**
     * @var string
     *
     * @ORM\Column(name="x_essen_gehen", type="string", length=1, nullable=true)
     */
    private $xEssenGehen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_filmeabend", type="string", length=1, nullable=true)
     */
    private $xFilmeabend;

    /**
     * @var string
     *
     * @ORM\Column(name="x_fkk", type="string", length=1, nullable=true)
     */
    private $xFkk;

    /**
     * @var string
     *
     * @ORM\Column(name="x_fruestuecken", type="string", length=1, nullable=true)
     */
    private $xFruestuecken;

    /**
     * @var string
     *
     * @ORM\Column(name="x_fitness", type="string", length=1, nullable=true)
     */
    private $xFitness;

    /**
     * @var string
     *
     * @ORM\Column(name="x_fussball", type="string", length=1, nullable=true)
     */
    private $xFussball;

    /**
     * @var string
     *
     * @ORM\Column(name="x_fotografieren", type="string", length=1, nullable=true)
     */
    private $xFotografieren;

    /**
     * @var string
     *
     * @ORM\Column(name="x_gesundheit", type="string", length=1, nullable=true)
     */
    private $xGesundheit;

    /**
     * @var string
     *
     * @ORM\Column(name="x_grillen", type="string", length=1, nullable=true)
     */
    private $xGrillen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_golfen", type="string", length=1, nullable=true)
     */
    private $xGolfen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_huettenwandern", type="string", length=1, nullable=true)
     */
    private $xHuettenwandern;

    /**
     * @var string
     *
     * @ORM\Column(name="x_inlineskaten", type="string", length=1, nullable=true)
     */
    private $xInlineskaten;

    /**
     * @var string
     *
     * @ORM\Column(name="x_jogging", type="string", length=1, nullable=true)
     */
    private $xJogging;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kampfsport", type="string", length=1, nullable=true)
     */
    private $xKampfsport;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kanutour", type="string", length=1, nullable=true)
     */
    private $xKanutour;

    /**
     * @var string
     *
     * @ORM\Column(name="x_karaoke", type="string", length=1, nullable=true)
     */
    private $xKaraoke;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kino", type="string", length=1, nullable=true)
     */
    private $xKino;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kitesurfen", type="string", length=1, nullable=true)
     */
    private $xKitesurfen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_klettern", type="string", length=1, nullable=true)
     */
    private $xKlettern;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kochen", type="string", length=1, nullable=true)
     */
    private $xKochen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kochkurs", type="string", length=1, nullable=true)
     */
    private $xKochkurs;

    /**
     * @var string
     *
     * @ORM\Column(name="x_konzerte", type="string", length=1, nullable=true)
     */
    private $xKonzerte;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kultur", type="string", length=1, nullable=true)
     */
    private $xKultur;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kunst", type="string", length=1, nullable=true)
     */
    private $xKunst;

    /**
     * @var string
     *
     * @ORM\Column(name="x_kurzreisen", type="string", length=1, nullable=true)
     */
    private $xKurzreisen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_lesen", type="string", length=1, nullable=true)
     */
    private $xLesen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_malen", type="string", length=1, nullable=true)
     */
    private $xMalen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_marathonlaufen", type="string", length=1, nullable=true)
     */
    private $xMarathonlaufen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_messebesuche", type="string", length=1, nullable=true)
     */
    private $xMessebesuche;

    /**
     * @var string
     *
     * @ORM\Column(name="x_minigolf", type="string", length=1, nullable=true)
     */
    private $xMinigolf;

    /**
     * @var string
     *
     * @ORM\Column(name="x_motorradfahren", type="string", length=1, nullable=true)
     */
    private $xMotorradfahren;

    /**
     * @var string
     *
     * @ORM\Column(name="x_mountainbiken", type="string", length=1, nullable=true)
     */
    private $xMountainbiken;

    /**
     * @var string
     *
     * @ORM\Column(name="x_musicals", type="string", length=1, nullable=true)
     */
    private $xMusicals;

    /**
     * @var string
     *
     * @ORM\Column(name="x_musik", type="string", length=1, nullable=true)
     */
    private $xMusik;

    /**
     * @var string
     *
     * @ORM\Column(name="x_natur", type="string", length=1, nullable=true)
     */
    private $xNatur;

    /**
     * @var string
     *
     * @ORM\Column(name="x_neue_leute_kennenlernen", type="string", length=1, nullable=true)
     */
    private $xNeueLeuteKennenlernen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_nordic_walking", type="string", length=1, nullable=true)
     */
    private $xNordicWalking;

    /**
     * @var string
     *
     * @ORM\Column(name="x_partys", type="string", length=1, nullable=true)
     */
    private $xPartys;

    /**
     * @var string
     *
     * @ORM\Column(name="x_picknick", type="string", length=1, nullable=true)
     */
    private $xPicknick;

    /**
     * @var string
     *
     * @ORM\Column(name="x_pilgern", type="string", length=1, nullable=true)
     */
    private $xPilgern;

    /**
     * @var string
     *
     * @ORM\Column(name="x_politik", type="string", length=1, nullable=true)
     */
    private $xPolitik;

    /**
     * @var string
     *
     * @ORM\Column(name="x_psychologie", type="string", length=1, nullable=true)
     */
    private $xPsychologie;

    /**
     * @var string
     *
     * @ORM\Column(name="x_radfahren", type="string", length=1, nullable=true)
     */
    private $xRadfahren;

    /**
     * @var string
     *
     * @ORM\Column(name="x_reisen", type="string", length=1, nullable=true)
     */
    private $xReisen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_reisen_last_minute", type="string", length=1, nullable=true)
     */
    private $xReisenLastMinute;

    /**
     * @var string
     *
     * @ORM\Column(name="x_reisen_mit_rucksack", type="string", length=1, nullable=true)
     */
    private $xReisenMitRucksack;

    /**
     * @var string
     *
     * @ORM\Column(name="x_reiten", type="string", length=1, nullable=true)
     */
    private $xReiten;

    /**
     * @var string
     *
     * @ORM\Column(name="x_sauna", type="string", length=1, nullable=true)
     */
    private $xSauna;

    /**
     * @var string
     *
     * @ORM\Column(name="x_schwimmen", type="string", length=1, nullable=true)
     */
    private $xSchwimmen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_segelfliegen", type="string", length=1, nullable=true)
     */
    private $xSegelfliegen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_segeln", type="string", length=1, nullable=true)
     */
    private $xSegeln;

    /**
     * @var string
     *
     * @ORM\Column(name="x_single_kind_events", type="string", length=1, nullable=true)
     */
    private $xSingleKindEvents;

    /**
     * @var string
     *
     * @ORM\Column(name="x_singlereisen", type="string", length=1, nullable=true)
     */
    private $xSinglereisen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_singletreffen", type="string", length=1, nullable=true)
     */
    private $xSingletreffen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_skifahren", type="string", length=1, nullable=true)
     */
    private $xSkifahren;

    /**
     * @var string
     *
     * @ORM\Column(name="x_skilanglauf", type="string", length=1, nullable=true)
     */
    private $xSkilanglauf;

    /**
     * @var string
     *
     * @ORM\Column(name="x_snowboarden", type="string", length=1, nullable=true)
     */
    private $xSnowboarden;

    /**
     * @var string
     *
     * @ORM\Column(name="x_spazieren_gehen", type="string", length=1, nullable=true)
     */
    private $xSpazierenGehen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_spieleabende", type="string", length=1, nullable=true)
     */
    private $xSpieleabende;

    /**
     * @var string
     *
     * @ORM\Column(name="x_spontanaktionen", type="string", length=1, nullable=true)
     */
    private $xSpontanaktionen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_sport", type="string", length=1, nullable=true)
     */
    private $xSport;

    /**
     * @var string
     *
     * @ORM\Column(name="x_sprachreisen", type="string", length=1, nullable=true)
     */
    private $xSprachreisen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_squash", type="string", length=1, nullable=true)
     */
    private $xSquash;

    /**
     * @var string
     *
     * @ORM\Column(name="x_staedtetouren", type="string", length=1, nullable=true)
     */
    private $xStaedtetouren;

    /**
     * @var string
     *
     * @ORM\Column(name="x_stammtisch", type="string", length=1, nullable=true)
     */
    private $xStammtisch;

    /**
     * @var string
     *
     * @ORM\Column(name="x_tanzen", type="string", length=1, nullable=true)
     */
    private $xTanzen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_tauchen", type="string", length=1, nullable=true)
     */
    private $xTauchen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_tennis", type="string", length=1, nullable=true)
     */
    private $xTennis;

    /**
     * @var string
     *
     * @ORM\Column(name="x_tiere", type="string", length=1, nullable=true)
     */
    private $xTiere;

    /**
     * @var string
     *
     * @ORM\Column(name="x_tischtennis", type="string", length=1, nullable=true)
     */
    private $xTischtennis;

    /**
     * @var string
     *
     * @ORM\Column(name="x_volksfest", type="string", length=1, nullable=true)
     */
    private $xVolksfest;

    /**
     * @var string
     *
     * @ORM\Column(name="x_volleyball_beach", type="string", length=1, nullable=true)
     */
    private $xVolleyballBeach;

    /**
     * @var string
     *
     * @ORM\Column(name="x_wandern", type="string", length=1, nullable=true)
     */
    private $xWandern;

    /**
     * @var string
     *
     * @ORM\Column(name="x_weinproben", type="string", length=1, nullable=true)
     */
    private $xWeinproben;

    /**
     * @var string
     *
     * @ORM\Column(name="x_wellness", type="string", length=1, nullable=true)
     */
    private $xWellness;

    /**
     * @var string
     *
     * @ORM\Column(name="x_windsurfen", type="string", length=1, nullable=true)
     */
    private $xWindsurfen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_wochenendtrips", type="string", length=1, nullable=true)
     */
    private $xWochenendtrips;

    /**
     * @var string
     *
     * @ORM\Column(name="x_wohnmobiltour", type="string", length=1, nullable=true)
     */
    private $xWohnmobiltour;

    /**
     * @var string
     *
     * @ORM\Column(name="x_yoga", type="string", length=1, nullable=true)
     */
    private $xYoga;

    /**
     * @var string
     *
     * @ORM\Column(name="mitgliedschaft", type="string", length=2, nullable=true)
     */
    private $mitgliedschaft;

    /**
     * @var string
     *
     * @ORM\Column(name="x_fake", type="string", length=1, nullable=true)
     */
    private $xFake;

    /**
     * @var integer
     *
     * @ORM\Column(name="punkte1", type="integer", nullable=true)
     */
    private $punkte1;

    /**
     * @var integer
     *
     * @ORM\Column(name="punkte2", type="integer", nullable=true)
     */
    private $punkte2;

    /**
     * @var integer
     *
     * @ORM\Column(name="punkte3", type="integer", nullable=true)
     */
    private $punkte3;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_email", type="string", length=1, nullable=true)
     */
    private $xSetEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_name", type="string", length=1, nullable=true)
     */
    private $xSetName;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_street", type="string", length=1, nullable=true)
     */
    private $xSetStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_streetnr", type="string", length=1, nullable=true)
     */
    private $xSetStreetnr;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_plz", type="string", length=1, nullable=true)
     */
    private $xSetPlz;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_city", type="string", length=1, nullable=true)
     */
    private $xSetCity;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_birthday", type="string", length=1, nullable=true)
     */
    private $xSetBirthday;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_sternzeichen", type="string", length=1, nullable=true)
     */
    private $xSetSternzeichen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_beziehung", type="string", length=1, nullable=true)
     */
    private $xSetBeziehung;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_kinder", type="string", length=1, nullable=true)
     */
    private $xSetKinder;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_haushalt", type="string", length=1, nullable=true)
     */
    private $xSetHaushalt;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_haarfarbe", type="string", length=1, nullable=true)
     */
    private $xSetHaarfarbe;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_augenfarbe", type="string", length=1, nullable=true)
     */
    private $xSetAugenfarbe;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_gewicht", type="string", length=1, nullable=true)
     */
    private $xSetGewicht;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_groesse", type="string", length=1, nullable=true)
     */
    private $xSetGroesse;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_alkohol", type="string", length=1, nullable=true)
     */
    private $xSetAlkohol;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_raucher", type="string", length=1, nullable=true)
     */
    private $xSetRaucher;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_mobil", type="string", length=1, nullable=true)
     */
    private $xSetMobil;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_phone1", type="string", length=1, nullable=true)
     */
    private $xSetPhone1;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_phone2", type="string", length=1, nullable=true)
     */
    private $xSetPhone2;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_phone3", type="string", length=1, nullable=true)
     */
    private $xSetPhone3;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_fax", type="string", length=1, nullable=true)
     */
    private $xSetFax;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_facebook", type="string", length=1, nullable=true)
     */
    private $xSetFacebook;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_skype", type="string", length=1, nullable=true)
     */
    private $xSetSkype;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_icq", type="string", length=1, nullable=true)
     */
    private $xSetIcq;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_ue30", type="string", length=1, nullable=true)
     */
    private $xSetUe30;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_homepage", type="string", length=1, nullable=true)
     */
    private $xSetHomepage;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_ich_mag", type="string", length=1, nullable=true)
     */
    private $xSetIchMag;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_ich_mag_nicht", type="string", length=1, nullable=true)
     */
    private $xSetIchMagNicht;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_lieblingsfilm", type="string", length=1, nullable=true)
     */
    private $xSetLieblingsfilm;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_lieblingslied", type="string", length=1, nullable=true)
     */
    private $xSetLieblingslied;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_lieblingsessen", type="string", length=1, nullable=true)
     */
    private $xSetLieblingsessen;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_musikrichtung", type="string", length=1, nullable=true)
     */
    private $xSetMusikrichtung;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_hobbies", type="string", length=1, nullable=true)
     */
    private $xSetHobbies;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_beruf", type="string", length=1, nullable=true)
     */
    private $xSetBeruf;

    /**
     * @var string
     *
     * @ORM\Column(name="x_set_schulabschluss", type="string", length=1, nullable=true)
     */
    private $xSetSchulabschluss;

    /**
     * @var string
     *
     * @ORM\Column(name="x_login", type="string", length=1, nullable=true)
     */
    private $xLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="login_timestamp", type="datetime", nullable=false)
     */
    private $loginTimestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=50, nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_adresse", type="string", length=39, nullable=true)
     */
    private $ipAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="hostname", type="string", length=255, nullable=true)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="x_agbs", type="string", length=1, nullable=true)
     */
    private $xAgbs;

    /**
     * @var string
     *
     * @ORM\Column(name="x_newsletter", type="string", length=1, nullable=true)
     */
    private $xNewsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", length=255, nullable=false)
     */
    private $facebookId;

    /**
     * @var integer
     *
     * @ORM\Column(name="alter_wichtigkeit", type="integer", nullable=false)
     */
    private $alterWichtigkeit;

    /**
     * @var integer
     *
     * @ORM\Column(name="groesse_wichtigkeit", type="integer", nullable=false)
     */
    private $groesseWichtigkeit;

    /**
     * @var integer
     *
     * @ORM\Column(name="groesse_gleichheit", type="integer", nullable=false)
     */
    private $groesseGleichheit;

    /**
     * @var integer
     *
     * @ORM\Column(name="schulabschluss_wichtigkeit", type="integer", nullable=false)
     */
    private $schulabschlussWichtigkeit;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set loginname
     *
     * @param string $loginname
     * @return AaaUser
     */
    public function setLoginname($loginname)
    {
        $this->loginname = $loginname;

        return $this;
    }

    /**
     * Get loginname
     *
     * @return string 
     */
    public function getLoginname()
    {
        return $this->loginname;
    }

    /**
     * Set oauthProvider
     *
     * @param string $oauthProvider
     * @return AaaUser
     */
    public function setOauthProvider($oauthProvider)
    {
        $this->oauthProvider = $oauthProvider;

        return $this;
    }

    /**
     * Get oauthProvider
     *
     * @return string 
     */
    public function getOauthProvider()
    {
        return $this->oauthProvider;
    }

    /**
     * Set oauthUid
     *
     * @param string $oauthUid
     * @return AaaUser
     */
    public function setOauthUid($oauthUid)
    {
        $this->oauthUid = $oauthUid;

        return $this;
    }

    /**
     * Get oauthUid
     *
     * @return string 
     */
    public function getOauthUid()
    {
        return $this->oauthUid;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return AaaUser
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return AaaUser
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return AaaUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return AaaUser
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return AaaUser
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return AaaUser
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set disabled
     *
     * @param boolean $disabled
     * @return AaaUser
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Get disabled
     *
     * @return boolean 
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return AaaUser
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return AaaUser
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return AaaUser
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set streetnr
     *
     * @param string $streetnr
     * @return AaaUser
     */
    public function setStreetnr($streetnr)
    {
        $this->streetnr = $streetnr;

        return $this;
    }

    /**
     * Get streetnr
     *
     * @return string 
     */
    public function getStreetnr()
    {
        return $this->streetnr;
    }

    /**
     * Set plz
     *
     * @param string $plz
     * @return AaaUser
     */
    public function setPlz($plz)
    {
        $this->plz = $plz;

        return $this;
    }

    /**
     * Get plz
     *
     * @return string 
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return AaaUser
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param integer $country
     * @return AaaUser
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return integer 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return AaaUser
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set phone1
     *
     * @param string $phone1
     * @return AaaUser
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * Get phone1
     *
     * @return string 
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * Set phone2
     *
     * @param string $phone2
     * @return AaaUser
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2
     *
     * @return string 
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set phone3
     *
     * @param string $phone3
     * @return AaaUser
     */
    public function setPhone3($phone3)
    {
        $this->phone3 = $phone3;

        return $this;
    }

    /**
     * Get phone3
     *
     * @return string 
     */
    public function getPhone3()
    {
        return $this->phone3;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return AaaUser
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mobil
     *
     * @param string $mobil
     * @return AaaUser
     */
    public function setMobil($mobil)
    {
        $this->mobil = $mobil;

        return $this;
    }

    /**
     * Get mobil
     *
     * @return string 
     */
    public function getMobil()
    {
        return $this->mobil;
    }

    /**
     * Set icqnr
     *
     * @param string $icqnr
     * @return AaaUser
     */
    public function setIcqnr($icqnr)
    {
        $this->icqnr = $icqnr;

        return $this;
    }

    /**
     * Get icqnr
     *
     * @return string 
     */
    public function getIcqnr()
    {
        return $this->icqnr;
    }

    /**
     * Set ue30.de
     *
     * @param string $ue30.de
     * @return AaaUser
     */
    public function setUe30.de($ue30.de)
    {
        $this->ue30.de = $ue30.de;

        return $this;
    }

    /**
     * Get ue30.de
     *
     * @return string 
     */
    public function getUe30.de()
    {
        return $this->ue30.de;
    }

    /**
     * Set skypename
     *
     * @param string $skypename
     * @return AaaUser
     */
    public function setSkypename($skypename)
    {
        $this->skypename = $skypename;

        return $this;
    }

    /**
     * Get skypename
     *
     * @return string 
     */
    public function getSkypename()
    {
        return $this->skypename;
    }

    /**
     * Set facebookname
     *
     * @param string $facebookname
     * @return AaaUser
     */
    public function setFacebookname($facebookname)
    {
        $this->facebookname = $facebookname;

        return $this;
    }

    /**
     * Get facebookname
     *
     * @return string 
     */
    public function getFacebookname()
    {
        return $this->facebookname;
    }

    /**
     * Set homepage
     *
     * @param string $homepage
     * @return AaaUser
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * Get homepage
     *
     * @return string 
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * Set geschlecht
     *
     * @param string $geschlecht
     * @return AaaUser
     */
    public function setGeschlecht($geschlecht)
    {
        $this->geschlecht = $geschlecht;

        return $this;
    }

    /**
     * Get geschlecht
     *
     * @return string 
     */
    public function getGeschlecht()
    {
        return $this->geschlecht;
    }

    /**
     * Set geschlechtPartner
     *
     * @param string $geschlechtPartner
     * @return AaaUser
     */
    public function setGeschlechtPartner($geschlechtPartner)
    {
        $this->geschlechtPartner = $geschlechtPartner;

        return $this;
    }

    /**
     * Get geschlechtPartner
     *
     * @return string 
     */
    public function getGeschlechtPartner()
    {
        return $this->geschlechtPartner;
    }

    /**
     * Set xOrganisator
     *
     * @param string $xOrganisator
     * @return AaaUser
     */
    public function setXOrganisator($xOrganisator)
    {
        $this->xOrganisator = $xOrganisator;

        return $this;
    }

    /**
     * Get xOrganisator
     *
     * @return string 
     */
    public function getXOrganisator()
    {
        return $this->xOrganisator;
    }

    /**
     * Set xAdmin
     *
     * @param string $xAdmin
     * @return AaaUser
     */
    public function setXAdmin($xAdmin)
    {
        $this->xAdmin = $xAdmin;

        return $this;
    }

    /**
     * Get xAdmin
     *
     * @return string 
     */
    public function getXAdmin()
    {
        return $this->xAdmin;
    }

    /**
     * Set haarfarbe
     *
     * @param string $haarfarbe
     * @return AaaUser
     */
    public function setHaarfarbe($haarfarbe)
    {
        $this->haarfarbe = $haarfarbe;

        return $this;
    }

    /**
     * Get haarfarbe
     *
     * @return string 
     */
    public function getHaarfarbe()
    {
        return $this->haarfarbe;
    }

    /**
     * Set augenfarbe
     *
     * @param string $augenfarbe
     * @return AaaUser
     */
    public function setAugenfarbe($augenfarbe)
    {
        $this->augenfarbe = $augenfarbe;

        return $this;
    }

    /**
     * Get augenfarbe
     *
     * @return string 
     */
    public function getAugenfarbe()
    {
        return $this->augenfarbe;
    }

    /**
     * Set beziehungsstatus
     *
     * @param string $beziehungsstatus
     * @return AaaUser
     */
    public function setBeziehungsstatus($beziehungsstatus)
    {
        $this->beziehungsstatus = $beziehungsstatus;

        return $this;
    }

    /**
     * Get beziehungsstatus
     *
     * @return string 
     */
    public function getBeziehungsstatus()
    {
        return $this->beziehungsstatus;
    }

    /**
     * Set sternzeichen
     *
     * @param string $sternzeichen
     * @return AaaUser
     */
    public function setSternzeichen($sternzeichen)
    {
        $this->sternzeichen = $sternzeichen;

        return $this;
    }

    /**
     * Get sternzeichen
     *
     * @return string 
     */
    public function getSternzeichen()
    {
        return $this->sternzeichen;
    }

    /**
     * Set gewicht
     *
     * @param string $gewicht
     * @return AaaUser
     */
    public function setGewicht($gewicht)
    {
        $this->gewicht = $gewicht;

        return $this;
    }

    /**
     * Get gewicht
     *
     * @return string 
     */
    public function getGewicht()
    {
        return $this->gewicht;
    }

    /**
     * Set groesse
     *
     * @param string $groesse
     * @return AaaUser
     */
    public function setGroesse($groesse)
    {
        $this->groesse = $groesse;

        return $this;
    }

    /**
     * Get groesse
     *
     * @return string 
     */
    public function getGroesse()
    {
        return $this->groesse;
    }

    /**
     * Set xAlkohol
     *
     * @param string $xAlkohol
     * @return AaaUser
     */
    public function setXAlkohol($xAlkohol)
    {
        $this->xAlkohol = $xAlkohol;

        return $this;
    }

    /**
     * Get xAlkohol
     *
     * @return string 
     */
    public function getXAlkohol()
    {
        return $this->xAlkohol;
    }

    /**
     * Set xKinder
     *
     * @param string $xKinder
     * @return AaaUser
     */
    public function setXKinder($xKinder)
    {
        $this->xKinder = $xKinder;

        return $this;
    }

    /**
     * Get xKinder
     *
     * @return string 
     */
    public function getXKinder()
    {
        return $this->xKinder;
    }

    /**
     * Set xEigenerHaushalt
     *
     * @param string $xEigenerHaushalt
     * @return AaaUser
     */
    public function setXEigenerHaushalt($xEigenerHaushalt)
    {
        $this->xEigenerHaushalt = $xEigenerHaushalt;

        return $this;
    }

    /**
     * Get xEigenerHaushalt
     *
     * @return string 
     */
    public function getXEigenerHaushalt()
    {
        return $this->xEigenerHaushalt;
    }

    /**
     * Set xRaucher
     *
     * @param string $xRaucher
     * @return AaaUser
     */
    public function setXRaucher($xRaucher)
    {
        $this->xRaucher = $xRaucher;

        return $this;
    }

    /**
     * Get xRaucher
     *
     * @return string 
     */
    public function getXRaucher()
    {
        return $this->xRaucher;
    }

    /**
     * Set schulabschluss
     *
     * @param string $schulabschluss
     * @return AaaUser
     */
    public function setSchulabschluss($schulabschluss)
    {
        $this->schulabschluss = $schulabschluss;

        return $this;
    }

    /**
     * Get schulabschluss
     *
     * @return string 
     */
    public function getSchulabschluss()
    {
        return $this->schulabschluss;
    }

    /**
     * Set schulabschlussPartner
     *
     * @param string $schulabschlussPartner
     * @return AaaUser
     */
    public function setSchulabschlussPartner($schulabschlussPartner)
    {
        $this->schulabschlussPartner = $schulabschlussPartner;

        return $this;
    }

    /**
     * Get schulabschlussPartner
     *
     * @return string 
     */
    public function getSchulabschlussPartner()
    {
        return $this->schulabschlussPartner;
    }

    /**
     * Set musikrichtung
     *
     * @param string $musikrichtung
     * @return AaaUser
     */
    public function setMusikrichtung($musikrichtung)
    {
        $this->musikrichtung = $musikrichtung;

        return $this;
    }

    /**
     * Get musikrichtung
     *
     * @return string 
     */
    public function getMusikrichtung()
    {
        return $this->musikrichtung;
    }

    /**
     * Set ueberMich
     *
     * @param string $ueberMich
     * @return AaaUser
     */
    public function setUeberMich($ueberMich)
    {
        $this->ueberMich = $ueberMich;

        return $this;
    }

    /**
     * Get ueberMich
     *
     * @return string 
     */
    public function getUeberMich()
    {
        return $this->ueberMich;
    }

    /**
     * Set ichMag
     *
     * @param string $ichMag
     * @return AaaUser
     */
    public function setIchMag($ichMag)
    {
        $this->ichMag = $ichMag;

        return $this;
    }

    /**
     * Get ichMag
     *
     * @return string 
     */
    public function getIchMag()
    {
        return $this->ichMag;
    }

    /**
     * Set ichMagNicht
     *
     * @param string $ichMagNicht
     * @return AaaUser
     */
    public function setIchMagNicht($ichMagNicht)
    {
        $this->ichMagNicht = $ichMagNicht;

        return $this;
    }

    /**
     * Get ichMagNicht
     *
     * @return string 
     */
    public function getIchMagNicht()
    {
        return $this->ichMagNicht;
    }

    /**
     * Set hobbies
     *
     * @param string $hobbies
     * @return AaaUser
     */
    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;

        return $this;
    }

    /**
     * Get hobbies
     *
     * @return string 
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * Set beruf
     *
     * @param string $beruf
     * @return AaaUser
     */
    public function setBeruf($beruf)
    {
        $this->beruf = $beruf;

        return $this;
    }

    /**
     * Get beruf
     *
     * @return string 
     */
    public function getBeruf()
    {
        return $this->beruf;
    }

    /**
     * Set lieblingsfilm
     *
     * @param string $lieblingsfilm
     * @return AaaUser
     */
    public function setLieblingsfilm($lieblingsfilm)
    {
        $this->lieblingsfilm = $lieblingsfilm;

        return $this;
    }

    /**
     * Get lieblingsfilm
     *
     * @return string 
     */
    public function getLieblingsfilm()
    {
        return $this->lieblingsfilm;
    }

    /**
     * Set lieblingslied
     *
     * @param string $lieblingslied
     * @return AaaUser
     */
    public function setLieblingslied($lieblingslied)
    {
        $this->lieblingslied = $lieblingslied;

        return $this;
    }

    /**
     * Get lieblingslied
     *
     * @return string 
     */
    public function getLieblingslied()
    {
        return $this->lieblingslied;
    }

    /**
     * Set lieblingsessen
     *
     * @param string $lieblingsessen
     * @return AaaUser
     */
    public function setLieblingsessen($lieblingsessen)
    {
        $this->lieblingsessen = $lieblingsessen;

        return $this;
    }

    /**
     * Get lieblingsessen
     *
     * @return string 
     */
    public function getLieblingsessen()
    {
        return $this->lieblingsessen;
    }

    /**
     * Set xAerobic
     *
     * @param string $xAerobic
     * @return AaaUser
     */
    public function setXAerobic($xAerobic)
    {
        $this->xAerobic = $xAerobic;

        return $this;
    }

    /**
     * Get xAerobic
     *
     * @return string 
     */
    public function getXAerobic()
    {
        return $this->xAerobic;
    }

    /**
     * Set xAusgehen
     *
     * @param string $xAusgehen
     * @return AaaUser
     */
    public function setXAusgehen($xAusgehen)
    {
        $this->xAusgehen = $xAusgehen;

        return $this;
    }

    /**
     * Get xAusgehen
     *
     * @return string 
     */
    public function getXAusgehen()
    {
        return $this->xAusgehen;
    }

    /**
     * Set xBadmington
     *
     * @param string $xBadmington
     * @return AaaUser
     */
    public function setXBadmington($xBadmington)
    {
        $this->xBadmington = $xBadmington;

        return $this;
    }

    /**
     * Get xBadmington
     *
     * @return string 
     */
    public function getXBadmington()
    {
        return $this->xBadmington;
    }

    /**
     * Set xBasketball
     *
     * @param string $xBasketball
     * @return AaaUser
     */
    public function setXBasketball($xBasketball)
    {
        $this->xBasketball = $xBasketball;

        return $this;
    }

    /**
     * Get xBasketball
     *
     * @return string 
     */
    public function getXBasketball()
    {
        return $this->xBasketball;
    }

    /**
     * Set xBergsteigen
     *
     * @param string $xBergsteigen
     * @return AaaUser
     */
    public function setXBergsteigen($xBergsteigen)
    {
        $this->xBergsteigen = $xBergsteigen;

        return $this;
    }

    /**
     * Get xBergsteigen
     *
     * @return string 
     */
    public function getXBergsteigen()
    {
        return $this->xBergsteigen;
    }

    /**
     * Set xBiergarten
     *
     * @param string $xBiergarten
     * @return AaaUser
     */
    public function setXBiergarten($xBiergarten)
    {
        $this->xBiergarten = $xBiergarten;

        return $this;
    }

    /**
     * Get xBiergarten
     *
     * @return string 
     */
    public function getXBiergarten()
    {
        return $this->xBiergarten;
    }

    /**
     * Set xBilliard
     *
     * @param string $xBilliard
     * @return AaaUser
     */
    public function setXBilliard($xBilliard)
    {
        $this->xBilliard = $xBilliard;

        return $this;
    }

    /**
     * Get xBilliard
     *
     * @return string 
     */
    public function getXBilliard()
    {
        return $this->xBilliard;
    }

    /**
     * Set xBowling
     *
     * @param string $xBowling
     * @return AaaUser
     */
    public function setXBowling($xBowling)
    {
        $this->xBowling = $xBowling;

        return $this;
    }

    /**
     * Get xBowling
     *
     * @return string 
     */
    public function getXBowling()
    {
        return $this->xBowling;
    }

    /**
     * Set xCamping
     *
     * @param string $xCamping
     * @return AaaUser
     */
    public function setXCamping($xCamping)
    {
        $this->xCamping = $xCamping;

        return $this;
    }

    /**
     * Get xCamping
     *
     * @return string 
     */
    public function getXCamping()
    {
        return $this->xCamping;
    }

    /**
     * Set xCanyoning
     *
     * @param string $xCanyoning
     * @return AaaUser
     */
    public function setXCanyoning($xCanyoning)
    {
        $this->xCanyoning = $xCanyoning;

        return $this;
    }

    /**
     * Get xCanyoning
     *
     * @return string 
     */
    public function getXCanyoning()
    {
        return $this->xCanyoning;
    }

    /**
     * Set xComputer
     *
     * @param string $xComputer
     * @return AaaUser
     */
    public function setXComputer($xComputer)
    {
        $this->xComputer = $xComputer;

        return $this;
    }

    /**
     * Get xComputer
     *
     * @return string 
     */
    public function getXComputer()
    {
        return $this->xComputer;
    }

    /**
     * Set xDart
     *
     * @param string $xDart
     * @return AaaUser
     */
    public function setXDart($xDart)
    {
        $this->xDart = $xDart;

        return $this;
    }

    /**
     * Get xDart
     *
     * @return string 
     */
    public function getXDart()
    {
        return $this->xDart;
    }

    /**
     * Set xDating
     *
     * @param string $xDating
     * @return AaaUser
     */
    public function setXDating($xDating)
    {
        $this->xDating = $xDating;

        return $this;
    }

    /**
     * Get xDating
     *
     * @return string 
     */
    public function getXDating()
    {
        return $this->xDating;
    }

    /**
     * Set xEinkaufen
     *
     * @param string $xEinkaufen
     * @return AaaUser
     */
    public function setXEinkaufen($xEinkaufen)
    {
        $this->xEinkaufen = $xEinkaufen;

        return $this;
    }

    /**
     * Get xEinkaufen
     *
     * @return string 
     */
    public function getXEinkaufen()
    {
        return $this->xEinkaufen;
    }

    /**
     * Set xErotisches
     *
     * @param string $xErotisches
     * @return AaaUser
     */
    public function setXErotisches($xErotisches)
    {
        $this->xErotisches = $xErotisches;

        return $this;
    }

    /**
     * Get xErotisches
     *
     * @return string 
     */
    public function getXErotisches()
    {
        return $this->xErotisches;
    }

    /**
     * Set xEssenGehen
     *
     * @param string $xEssenGehen
     * @return AaaUser
     */
    public function setXEssenGehen($xEssenGehen)
    {
        $this->xEssenGehen = $xEssenGehen;

        return $this;
    }

    /**
     * Get xEssenGehen
     *
     * @return string 
     */
    public function getXEssenGehen()
    {
        return $this->xEssenGehen;
    }

    /**
     * Set xFilmeabend
     *
     * @param string $xFilmeabend
     * @return AaaUser
     */
    public function setXFilmeabend($xFilmeabend)
    {
        $this->xFilmeabend = $xFilmeabend;

        return $this;
    }

    /**
     * Get xFilmeabend
     *
     * @return string 
     */
    public function getXFilmeabend()
    {
        return $this->xFilmeabend;
    }

    /**
     * Set xFkk
     *
     * @param string $xFkk
     * @return AaaUser
     */
    public function setXFkk($xFkk)
    {
        $this->xFkk = $xFkk;

        return $this;
    }

    /**
     * Get xFkk
     *
     * @return string 
     */
    public function getXFkk()
    {
        return $this->xFkk;
    }

    /**
     * Set xFruestuecken
     *
     * @param string $xFruestuecken
     * @return AaaUser
     */
    public function setXFruestuecken($xFruestuecken)
    {
        $this->xFruestuecken = $xFruestuecken;

        return $this;
    }

    /**
     * Get xFruestuecken
     *
     * @return string 
     */
    public function getXFruestuecken()
    {
        return $this->xFruestuecken;
    }

    /**
     * Set xFitness
     *
     * @param string $xFitness
     * @return AaaUser
     */
    public function setXFitness($xFitness)
    {
        $this->xFitness = $xFitness;

        return $this;
    }

    /**
     * Get xFitness
     *
     * @return string 
     */
    public function getXFitness()
    {
        return $this->xFitness;
    }

    /**
     * Set xFussball
     *
     * @param string $xFussball
     * @return AaaUser
     */
    public function setXFussball($xFussball)
    {
        $this->xFussball = $xFussball;

        return $this;
    }

    /**
     * Get xFussball
     *
     * @return string 
     */
    public function getXFussball()
    {
        return $this->xFussball;
    }

    /**
     * Set xFotografieren
     *
     * @param string $xFotografieren
     * @return AaaUser
     */
    public function setXFotografieren($xFotografieren)
    {
        $this->xFotografieren = $xFotografieren;

        return $this;
    }

    /**
     * Get xFotografieren
     *
     * @return string 
     */
    public function getXFotografieren()
    {
        return $this->xFotografieren;
    }

    /**
     * Set xGesundheit
     *
     * @param string $xGesundheit
     * @return AaaUser
     */
    public function setXGesundheit($xGesundheit)
    {
        $this->xGesundheit = $xGesundheit;

        return $this;
    }

    /**
     * Get xGesundheit
     *
     * @return string 
     */
    public function getXGesundheit()
    {
        return $this->xGesundheit;
    }

    /**
     * Set xGrillen
     *
     * @param string $xGrillen
     * @return AaaUser
     */
    public function setXGrillen($xGrillen)
    {
        $this->xGrillen = $xGrillen;

        return $this;
    }

    /**
     * Get xGrillen
     *
     * @return string 
     */
    public function getXGrillen()
    {
        return $this->xGrillen;
    }

    /**
     * Set xGolfen
     *
     * @param string $xGolfen
     * @return AaaUser
     */
    public function setXGolfen($xGolfen)
    {
        $this->xGolfen = $xGolfen;

        return $this;
    }

    /**
     * Get xGolfen
     *
     * @return string 
     */
    public function getXGolfen()
    {
        return $this->xGolfen;
    }

    /**
     * Set xHuettenwandern
     *
     * @param string $xHuettenwandern
     * @return AaaUser
     */
    public function setXHuettenwandern($xHuettenwandern)
    {
        $this->xHuettenwandern = $xHuettenwandern;

        return $this;
    }

    /**
     * Get xHuettenwandern
     *
     * @return string 
     */
    public function getXHuettenwandern()
    {
        return $this->xHuettenwandern;
    }

    /**
     * Set xInlineskaten
     *
     * @param string $xInlineskaten
     * @return AaaUser
     */
    public function setXInlineskaten($xInlineskaten)
    {
        $this->xInlineskaten = $xInlineskaten;

        return $this;
    }

    /**
     * Get xInlineskaten
     *
     * @return string 
     */
    public function getXInlineskaten()
    {
        return $this->xInlineskaten;
    }

    /**
     * Set xJogging
     *
     * @param string $xJogging
     * @return AaaUser
     */
    public function setXJogging($xJogging)
    {
        $this->xJogging = $xJogging;

        return $this;
    }

    /**
     * Get xJogging
     *
     * @return string 
     */
    public function getXJogging()
    {
        return $this->xJogging;
    }

    /**
     * Set xKampfsport
     *
     * @param string $xKampfsport
     * @return AaaUser
     */
    public function setXKampfsport($xKampfsport)
    {
        $this->xKampfsport = $xKampfsport;

        return $this;
    }

    /**
     * Get xKampfsport
     *
     * @return string 
     */
    public function getXKampfsport()
    {
        return $this->xKampfsport;
    }

    /**
     * Set xKanutour
     *
     * @param string $xKanutour
     * @return AaaUser
     */
    public function setXKanutour($xKanutour)
    {
        $this->xKanutour = $xKanutour;

        return $this;
    }

    /**
     * Get xKanutour
     *
     * @return string 
     */
    public function getXKanutour()
    {
        return $this->xKanutour;
    }

    /**
     * Set xKaraoke
     *
     * @param string $xKaraoke
     * @return AaaUser
     */
    public function setXKaraoke($xKaraoke)
    {
        $this->xKaraoke = $xKaraoke;

        return $this;
    }

    /**
     * Get xKaraoke
     *
     * @return string 
     */
    public function getXKaraoke()
    {
        return $this->xKaraoke;
    }

    /**
     * Set xKino
     *
     * @param string $xKino
     * @return AaaUser
     */
    public function setXKino($xKino)
    {
        $this->xKino = $xKino;

        return $this;
    }

    /**
     * Get xKino
     *
     * @return string 
     */
    public function getXKino()
    {
        return $this->xKino;
    }

    /**
     * Set xKitesurfen
     *
     * @param string $xKitesurfen
     * @return AaaUser
     */
    public function setXKitesurfen($xKitesurfen)
    {
        $this->xKitesurfen = $xKitesurfen;

        return $this;
    }

    /**
     * Get xKitesurfen
     *
     * @return string 
     */
    public function getXKitesurfen()
    {
        return $this->xKitesurfen;
    }

    /**
     * Set xKlettern
     *
     * @param string $xKlettern
     * @return AaaUser
     */
    public function setXKlettern($xKlettern)
    {
        $this->xKlettern = $xKlettern;

        return $this;
    }

    /**
     * Get xKlettern
     *
     * @return string 
     */
    public function getXKlettern()
    {
        return $this->xKlettern;
    }

    /**
     * Set xKochen
     *
     * @param string $xKochen
     * @return AaaUser
     */
    public function setXKochen($xKochen)
    {
        $this->xKochen = $xKochen;

        return $this;
    }

    /**
     * Get xKochen
     *
     * @return string 
     */
    public function getXKochen()
    {
        return $this->xKochen;
    }

    /**
     * Set xKochkurs
     *
     * @param string $xKochkurs
     * @return AaaUser
     */
    public function setXKochkurs($xKochkurs)
    {
        $this->xKochkurs = $xKochkurs;

        return $this;
    }

    /**
     * Get xKochkurs
     *
     * @return string 
     */
    public function getXKochkurs()
    {
        return $this->xKochkurs;
    }

    /**
     * Set xKonzerte
     *
     * @param string $xKonzerte
     * @return AaaUser
     */
    public function setXKonzerte($xKonzerte)
    {
        $this->xKonzerte = $xKonzerte;

        return $this;
    }

    /**
     * Get xKonzerte
     *
     * @return string 
     */
    public function getXKonzerte()
    {
        return $this->xKonzerte;
    }

    /**
     * Set xKultur
     *
     * @param string $xKultur
     * @return AaaUser
     */
    public function setXKultur($xKultur)
    {
        $this->xKultur = $xKultur;

        return $this;
    }

    /**
     * Get xKultur
     *
     * @return string 
     */
    public function getXKultur()
    {
        return $this->xKultur;
    }

    /**
     * Set xKunst
     *
     * @param string $xKunst
     * @return AaaUser
     */
    public function setXKunst($xKunst)
    {
        $this->xKunst = $xKunst;

        return $this;
    }

    /**
     * Get xKunst
     *
     * @return string 
     */
    public function getXKunst()
    {
        return $this->xKunst;
    }

    /**
     * Set xKurzreisen
     *
     * @param string $xKurzreisen
     * @return AaaUser
     */
    public function setXKurzreisen($xKurzreisen)
    {
        $this->xKurzreisen = $xKurzreisen;

        return $this;
    }

    /**
     * Get xKurzreisen
     *
     * @return string 
     */
    public function getXKurzreisen()
    {
        return $this->xKurzreisen;
    }

    /**
     * Set xLesen
     *
     * @param string $xLesen
     * @return AaaUser
     */
    public function setXLesen($xLesen)
    {
        $this->xLesen = $xLesen;

        return $this;
    }

    /**
     * Get xLesen
     *
     * @return string 
     */
    public function getXLesen()
    {
        return $this->xLesen;
    }

    /**
     * Set xMalen
     *
     * @param string $xMalen
     * @return AaaUser
     */
    public function setXMalen($xMalen)
    {
        $this->xMalen = $xMalen;

        return $this;
    }

    /**
     * Get xMalen
     *
     * @return string 
     */
    public function getXMalen()
    {
        return $this->xMalen;
    }

    /**
     * Set xMarathonlaufen
     *
     * @param string $xMarathonlaufen
     * @return AaaUser
     */
    public function setXMarathonlaufen($xMarathonlaufen)
    {
        $this->xMarathonlaufen = $xMarathonlaufen;

        return $this;
    }

    /**
     * Get xMarathonlaufen
     *
     * @return string 
     */
    public function getXMarathonlaufen()
    {
        return $this->xMarathonlaufen;
    }

    /**
     * Set xMessebesuche
     *
     * @param string $xMessebesuche
     * @return AaaUser
     */
    public function setXMessebesuche($xMessebesuche)
    {
        $this->xMessebesuche = $xMessebesuche;

        return $this;
    }

    /**
     * Get xMessebesuche
     *
     * @return string 
     */
    public function getXMessebesuche()
    {
        return $this->xMessebesuche;
    }

    /**
     * Set xMinigolf
     *
     * @param string $xMinigolf
     * @return AaaUser
     */
    public function setXMinigolf($xMinigolf)
    {
        $this->xMinigolf = $xMinigolf;

        return $this;
    }

    /**
     * Get xMinigolf
     *
     * @return string 
     */
    public function getXMinigolf()
    {
        return $this->xMinigolf;
    }

    /**
     * Set xMotorradfahren
     *
     * @param string $xMotorradfahren
     * @return AaaUser
     */
    public function setXMotorradfahren($xMotorradfahren)
    {
        $this->xMotorradfahren = $xMotorradfahren;

        return $this;
    }

    /**
     * Get xMotorradfahren
     *
     * @return string 
     */
    public function getXMotorradfahren()
    {
        return $this->xMotorradfahren;
    }

    /**
     * Set xMountainbiken
     *
     * @param string $xMountainbiken
     * @return AaaUser
     */
    public function setXMountainbiken($xMountainbiken)
    {
        $this->xMountainbiken = $xMountainbiken;

        return $this;
    }

    /**
     * Get xMountainbiken
     *
     * @return string 
     */
    public function getXMountainbiken()
    {
        return $this->xMountainbiken;
    }

    /**
     * Set xMusicals
     *
     * @param string $xMusicals
     * @return AaaUser
     */
    public function setXMusicals($xMusicals)
    {
        $this->xMusicals = $xMusicals;

        return $this;
    }

    /**
     * Get xMusicals
     *
     * @return string 
     */
    public function getXMusicals()
    {
        return $this->xMusicals;
    }

    /**
     * Set xMusik
     *
     * @param string $xMusik
     * @return AaaUser
     */
    public function setXMusik($xMusik)
    {
        $this->xMusik = $xMusik;

        return $this;
    }

    /**
     * Get xMusik
     *
     * @return string 
     */
    public function getXMusik()
    {
        return $this->xMusik;
    }

    /**
     * Set xNatur
     *
     * @param string $xNatur
     * @return AaaUser
     */
    public function setXNatur($xNatur)
    {
        $this->xNatur = $xNatur;

        return $this;
    }

    /**
     * Get xNatur
     *
     * @return string 
     */
    public function getXNatur()
    {
        return $this->xNatur;
    }

    /**
     * Set xNeueLeuteKennenlernen
     *
     * @param string $xNeueLeuteKennenlernen
     * @return AaaUser
     */
    public function setXNeueLeuteKennenlernen($xNeueLeuteKennenlernen)
    {
        $this->xNeueLeuteKennenlernen = $xNeueLeuteKennenlernen;

        return $this;
    }

    /**
     * Get xNeueLeuteKennenlernen
     *
     * @return string 
     */
    public function getXNeueLeuteKennenlernen()
    {
        return $this->xNeueLeuteKennenlernen;
    }

    /**
     * Set xNordicWalking
     *
     * @param string $xNordicWalking
     * @return AaaUser
     */
    public function setXNordicWalking($xNordicWalking)
    {
        $this->xNordicWalking = $xNordicWalking;

        return $this;
    }

    /**
     * Get xNordicWalking
     *
     * @return string 
     */
    public function getXNordicWalking()
    {
        return $this->xNordicWalking;
    }

    /**
     * Set xPartys
     *
     * @param string $xPartys
     * @return AaaUser
     */
    public function setXPartys($xPartys)
    {
        $this->xPartys = $xPartys;

        return $this;
    }

    /**
     * Get xPartys
     *
     * @return string 
     */
    public function getXPartys()
    {
        return $this->xPartys;
    }

    /**
     * Set xPicknick
     *
     * @param string $xPicknick
     * @return AaaUser
     */
    public function setXPicknick($xPicknick)
    {
        $this->xPicknick = $xPicknick;

        return $this;
    }

    /**
     * Get xPicknick
     *
     * @return string 
     */
    public function getXPicknick()
    {
        return $this->xPicknick;
    }

    /**
     * Set xPilgern
     *
     * @param string $xPilgern
     * @return AaaUser
     */
    public function setXPilgern($xPilgern)
    {
        $this->xPilgern = $xPilgern;

        return $this;
    }

    /**
     * Get xPilgern
     *
     * @return string 
     */
    public function getXPilgern()
    {
        return $this->xPilgern;
    }

    /**
     * Set xPolitik
     *
     * @param string $xPolitik
     * @return AaaUser
     */
    public function setXPolitik($xPolitik)
    {
        $this->xPolitik = $xPolitik;

        return $this;
    }

    /**
     * Get xPolitik
     *
     * @return string 
     */
    public function getXPolitik()
    {
        return $this->xPolitik;
    }

    /**
     * Set xPsychologie
     *
     * @param string $xPsychologie
     * @return AaaUser
     */
    public function setXPsychologie($xPsychologie)
    {
        $this->xPsychologie = $xPsychologie;

        return $this;
    }

    /**
     * Get xPsychologie
     *
     * @return string 
     */
    public function getXPsychologie()
    {
        return $this->xPsychologie;
    }

    /**
     * Set xRadfahren
     *
     * @param string $xRadfahren
     * @return AaaUser
     */
    public function setXRadfahren($xRadfahren)
    {
        $this->xRadfahren = $xRadfahren;

        return $this;
    }

    /**
     * Get xRadfahren
     *
     * @return string 
     */
    public function getXRadfahren()
    {
        return $this->xRadfahren;
    }

    /**
     * Set xReisen
     *
     * @param string $xReisen
     * @return AaaUser
     */
    public function setXReisen($xReisen)
    {
        $this->xReisen = $xReisen;

        return $this;
    }

    /**
     * Get xReisen
     *
     * @return string 
     */
    public function getXReisen()
    {
        return $this->xReisen;
    }

    /**
     * Set xReisenLastMinute
     *
     * @param string $xReisenLastMinute
     * @return AaaUser
     */
    public function setXReisenLastMinute($xReisenLastMinute)
    {
        $this->xReisenLastMinute = $xReisenLastMinute;

        return $this;
    }

    /**
     * Get xReisenLastMinute
     *
     * @return string 
     */
    public function getXReisenLastMinute()
    {
        return $this->xReisenLastMinute;
    }

    /**
     * Set xReisenMitRucksack
     *
     * @param string $xReisenMitRucksack
     * @return AaaUser
     */
    public function setXReisenMitRucksack($xReisenMitRucksack)
    {
        $this->xReisenMitRucksack = $xReisenMitRucksack;

        return $this;
    }

    /**
     * Get xReisenMitRucksack
     *
     * @return string 
     */
    public function getXReisenMitRucksack()
    {
        return $this->xReisenMitRucksack;
    }

    /**
     * Set xReiten
     *
     * @param string $xReiten
     * @return AaaUser
     */
    public function setXReiten($xReiten)
    {
        $this->xReiten = $xReiten;

        return $this;
    }

    /**
     * Get xReiten
     *
     * @return string 
     */
    public function getXReiten()
    {
        return $this->xReiten;
    }

    /**
     * Set xSauna
     *
     * @param string $xSauna
     * @return AaaUser
     */
    public function setXSauna($xSauna)
    {
        $this->xSauna = $xSauna;

        return $this;
    }

    /**
     * Get xSauna
     *
     * @return string 
     */
    public function getXSauna()
    {
        return $this->xSauna;
    }

    /**
     * Set xSchwimmen
     *
     * @param string $xSchwimmen
     * @return AaaUser
     */
    public function setXSchwimmen($xSchwimmen)
    {
        $this->xSchwimmen = $xSchwimmen;

        return $this;
    }

    /**
     * Get xSchwimmen
     *
     * @return string 
     */
    public function getXSchwimmen()
    {
        return $this->xSchwimmen;
    }

    /**
     * Set xSegelfliegen
     *
     * @param string $xSegelfliegen
     * @return AaaUser
     */
    public function setXSegelfliegen($xSegelfliegen)
    {
        $this->xSegelfliegen = $xSegelfliegen;

        return $this;
    }

    /**
     * Get xSegelfliegen
     *
     * @return string 
     */
    public function getXSegelfliegen()
    {
        return $this->xSegelfliegen;
    }

    /**
     * Set xSegeln
     *
     * @param string $xSegeln
     * @return AaaUser
     */
    public function setXSegeln($xSegeln)
    {
        $this->xSegeln = $xSegeln;

        return $this;
    }

    /**
     * Get xSegeln
     *
     * @return string 
     */
    public function getXSegeln()
    {
        return $this->xSegeln;
    }

    /**
     * Set xSingleKindEvents
     *
     * @param string $xSingleKindEvents
     * @return AaaUser
     */
    public function setXSingleKindEvents($xSingleKindEvents)
    {
        $this->xSingleKindEvents = $xSingleKindEvents;

        return $this;
    }

    /**
     * Get xSingleKindEvents
     *
     * @return string 
     */
    public function getXSingleKindEvents()
    {
        return $this->xSingleKindEvents;
    }

    /**
     * Set xSinglereisen
     *
     * @param string $xSinglereisen
     * @return AaaUser
     */
    public function setXSinglereisen($xSinglereisen)
    {
        $this->xSinglereisen = $xSinglereisen;

        return $this;
    }

    /**
     * Get xSinglereisen
     *
     * @return string 
     */
    public function getXSinglereisen()
    {
        return $this->xSinglereisen;
    }

    /**
     * Set xSingletreffen
     *
     * @param string $xSingletreffen
     * @return AaaUser
     */
    public function setXSingletreffen($xSingletreffen)
    {
        $this->xSingletreffen = $xSingletreffen;

        return $this;
    }

    /**
     * Get xSingletreffen
     *
     * @return string 
     */
    public function getXSingletreffen()
    {
        return $this->xSingletreffen;
    }

    /**
     * Set xSkifahren
     *
     * @param string $xSkifahren
     * @return AaaUser
     */
    public function setXSkifahren($xSkifahren)
    {
        $this->xSkifahren = $xSkifahren;

        return $this;
    }

    /**
     * Get xSkifahren
     *
     * @return string 
     */
    public function getXSkifahren()
    {
        return $this->xSkifahren;
    }

    /**
     * Set xSkilanglauf
     *
     * @param string $xSkilanglauf
     * @return AaaUser
     */
    public function setXSkilanglauf($xSkilanglauf)
    {
        $this->xSkilanglauf = $xSkilanglauf;

        return $this;
    }

    /**
     * Get xSkilanglauf
     *
     * @return string 
     */
    public function getXSkilanglauf()
    {
        return $this->xSkilanglauf;
    }

    /**
     * Set xSnowboarden
     *
     * @param string $xSnowboarden
     * @return AaaUser
     */
    public function setXSnowboarden($xSnowboarden)
    {
        $this->xSnowboarden = $xSnowboarden;

        return $this;
    }

    /**
     * Get xSnowboarden
     *
     * @return string 
     */
    public function getXSnowboarden()
    {
        return $this->xSnowboarden;
    }

    /**
     * Set xSpazierenGehen
     *
     * @param string $xSpazierenGehen
     * @return AaaUser
     */
    public function setXSpazierenGehen($xSpazierenGehen)
    {
        $this->xSpazierenGehen = $xSpazierenGehen;

        return $this;
    }

    /**
     * Get xSpazierenGehen
     *
     * @return string 
     */
    public function getXSpazierenGehen()
    {
        return $this->xSpazierenGehen;
    }

    /**
     * Set xSpieleabende
     *
     * @param string $xSpieleabende
     * @return AaaUser
     */
    public function setXSpieleabende($xSpieleabende)
    {
        $this->xSpieleabende = $xSpieleabende;

        return $this;
    }

    /**
     * Get xSpieleabende
     *
     * @return string 
     */
    public function getXSpieleabende()
    {
        return $this->xSpieleabende;
    }

    /**
     * Set xSpontanaktionen
     *
     * @param string $xSpontanaktionen
     * @return AaaUser
     */
    public function setXSpontanaktionen($xSpontanaktionen)
    {
        $this->xSpontanaktionen = $xSpontanaktionen;

        return $this;
    }

    /**
     * Get xSpontanaktionen
     *
     * @return string 
     */
    public function getXSpontanaktionen()
    {
        return $this->xSpontanaktionen;
    }

    /**
     * Set xSport
     *
     * @param string $xSport
     * @return AaaUser
     */
    public function setXSport($xSport)
    {
        $this->xSport = $xSport;

        return $this;
    }

    /**
     * Get xSport
     *
     * @return string 
     */
    public function getXSport()
    {
        return $this->xSport;
    }

    /**
     * Set xSprachreisen
     *
     * @param string $xSprachreisen
     * @return AaaUser
     */
    public function setXSprachreisen($xSprachreisen)
    {
        $this->xSprachreisen = $xSprachreisen;

        return $this;
    }

    /**
     * Get xSprachreisen
     *
     * @return string 
     */
    public function getXSprachreisen()
    {
        return $this->xSprachreisen;
    }

    /**
     * Set xSquash
     *
     * @param string $xSquash
     * @return AaaUser
     */
    public function setXSquash($xSquash)
    {
        $this->xSquash = $xSquash;

        return $this;
    }

    /**
     * Get xSquash
     *
     * @return string 
     */
    public function getXSquash()
    {
        return $this->xSquash;
    }

    /**
     * Set xStaedtetouren
     *
     * @param string $xStaedtetouren
     * @return AaaUser
     */
    public function setXStaedtetouren($xStaedtetouren)
    {
        $this->xStaedtetouren = $xStaedtetouren;

        return $this;
    }

    /**
     * Get xStaedtetouren
     *
     * @return string 
     */
    public function getXStaedtetouren()
    {
        return $this->xStaedtetouren;
    }

    /**
     * Set xStammtisch
     *
     * @param string $xStammtisch
     * @return AaaUser
     */
    public function setXStammtisch($xStammtisch)
    {
        $this->xStammtisch = $xStammtisch;

        return $this;
    }

    /**
     * Get xStammtisch
     *
     * @return string 
     */
    public function getXStammtisch()
    {
        return $this->xStammtisch;
    }

    /**
     * Set xTanzen
     *
     * @param string $xTanzen
     * @return AaaUser
     */
    public function setXTanzen($xTanzen)
    {
        $this->xTanzen = $xTanzen;

        return $this;
    }

    /**
     * Get xTanzen
     *
     * @return string 
     */
    public function getXTanzen()
    {
        return $this->xTanzen;
    }

    /**
     * Set xTauchen
     *
     * @param string $xTauchen
     * @return AaaUser
     */
    public function setXTauchen($xTauchen)
    {
        $this->xTauchen = $xTauchen;

        return $this;
    }

    /**
     * Get xTauchen
     *
     * @return string 
     */
    public function getXTauchen()
    {
        return $this->xTauchen;
    }

    /**
     * Set xTennis
     *
     * @param string $xTennis
     * @return AaaUser
     */
    public function setXTennis($xTennis)
    {
        $this->xTennis = $xTennis;

        return $this;
    }

    /**
     * Get xTennis
     *
     * @return string 
     */
    public function getXTennis()
    {
        return $this->xTennis;
    }

    /**
     * Set xTiere
     *
     * @param string $xTiere
     * @return AaaUser
     */
    public function setXTiere($xTiere)
    {
        $this->xTiere = $xTiere;

        return $this;
    }

    /**
     * Get xTiere
     *
     * @return string 
     */
    public function getXTiere()
    {
        return $this->xTiere;
    }

    /**
     * Set xTischtennis
     *
     * @param string $xTischtennis
     * @return AaaUser
     */
    public function setXTischtennis($xTischtennis)
    {
        $this->xTischtennis = $xTischtennis;

        return $this;
    }

    /**
     * Get xTischtennis
     *
     * @return string 
     */
    public function getXTischtennis()
    {
        return $this->xTischtennis;
    }

    /**
     * Set xVolksfest
     *
     * @param string $xVolksfest
     * @return AaaUser
     */
    public function setXVolksfest($xVolksfest)
    {
        $this->xVolksfest = $xVolksfest;

        return $this;
    }

    /**
     * Get xVolksfest
     *
     * @return string 
     */
    public function getXVolksfest()
    {
        return $this->xVolksfest;
    }

    /**
     * Set xVolleyballBeach
     *
     * @param string $xVolleyballBeach
     * @return AaaUser
     */
    public function setXVolleyballBeach($xVolleyballBeach)
    {
        $this->xVolleyballBeach = $xVolleyballBeach;

        return $this;
    }

    /**
     * Get xVolleyballBeach
     *
     * @return string 
     */
    public function getXVolleyballBeach()
    {
        return $this->xVolleyballBeach;
    }

    /**
     * Set xWandern
     *
     * @param string $xWandern
     * @return AaaUser
     */
    public function setXWandern($xWandern)
    {
        $this->xWandern = $xWandern;

        return $this;
    }

    /**
     * Get xWandern
     *
     * @return string 
     */
    public function getXWandern()
    {
        return $this->xWandern;
    }

    /**
     * Set xWeinproben
     *
     * @param string $xWeinproben
     * @return AaaUser
     */
    public function setXWeinproben($xWeinproben)
    {
        $this->xWeinproben = $xWeinproben;

        return $this;
    }

    /**
     * Get xWeinproben
     *
     * @return string 
     */
    public function getXWeinproben()
    {
        return $this->xWeinproben;
    }

    /**
     * Set xWellness
     *
     * @param string $xWellness
     * @return AaaUser
     */
    public function setXWellness($xWellness)
    {
        $this->xWellness = $xWellness;

        return $this;
    }

    /**
     * Get xWellness
     *
     * @return string 
     */
    public function getXWellness()
    {
        return $this->xWellness;
    }

    /**
     * Set xWindsurfen
     *
     * @param string $xWindsurfen
     * @return AaaUser
     */
    public function setXWindsurfen($xWindsurfen)
    {
        $this->xWindsurfen = $xWindsurfen;

        return $this;
    }

    /**
     * Get xWindsurfen
     *
     * @return string 
     */
    public function getXWindsurfen()
    {
        return $this->xWindsurfen;
    }

    /**
     * Set xWochenendtrips
     *
     * @param string $xWochenendtrips
     * @return AaaUser
     */
    public function setXWochenendtrips($xWochenendtrips)
    {
        $this->xWochenendtrips = $xWochenendtrips;

        return $this;
    }

    /**
     * Get xWochenendtrips
     *
     * @return string 
     */
    public function getXWochenendtrips()
    {
        return $this->xWochenendtrips;
    }

    /**
     * Set xWohnmobiltour
     *
     * @param string $xWohnmobiltour
     * @return AaaUser
     */
    public function setXWohnmobiltour($xWohnmobiltour)
    {
        $this->xWohnmobiltour = $xWohnmobiltour;

        return $this;
    }

    /**
     * Get xWohnmobiltour
     *
     * @return string 
     */
    public function getXWohnmobiltour()
    {
        return $this->xWohnmobiltour;
    }

    /**
     * Set xYoga
     *
     * @param string $xYoga
     * @return AaaUser
     */
    public function setXYoga($xYoga)
    {
        $this->xYoga = $xYoga;

        return $this;
    }

    /**
     * Get xYoga
     *
     * @return string 
     */
    public function getXYoga()
    {
        return $this->xYoga;
    }

    /**
     * Set mitgliedschaft
     *
     * @param string $mitgliedschaft
     * @return AaaUser
     */
    public function setMitgliedschaft($mitgliedschaft)
    {
        $this->mitgliedschaft = $mitgliedschaft;

        return $this;
    }

    /**
     * Get mitgliedschaft
     *
     * @return string 
     */
    public function getMitgliedschaft()
    {
        return $this->mitgliedschaft;
    }

    /**
     * Set xFake
     *
     * @param string $xFake
     * @return AaaUser
     */
    public function setXFake($xFake)
    {
        $this->xFake = $xFake;

        return $this;
    }

    /**
     * Get xFake
     *
     * @return string 
     */
    public function getXFake()
    {
        return $this->xFake;
    }

    /**
     * Set punkte1
     *
     * @param integer $punkte1
     * @return AaaUser
     */
    public function setPunkte1($punkte1)
    {
        $this->punkte1 = $punkte1;

        return $this;
    }

    /**
     * Get punkte1
     *
     * @return integer 
     */
    public function getPunkte1()
    {
        return $this->punkte1;
    }

    /**
     * Set punkte2
     *
     * @param integer $punkte2
     * @return AaaUser
     */
    public function setPunkte2($punkte2)
    {
        $this->punkte2 = $punkte2;

        return $this;
    }

    /**
     * Get punkte2
     *
     * @return integer 
     */
    public function getPunkte2()
    {
        return $this->punkte2;
    }

    /**
     * Set punkte3
     *
     * @param integer $punkte3
     * @return AaaUser
     */
    public function setPunkte3($punkte3)
    {
        $this->punkte3 = $punkte3;

        return $this;
    }

    /**
     * Get punkte3
     *
     * @return integer 
     */
    public function getPunkte3()
    {
        return $this->punkte3;
    }

    /**
     * Set xSetEmail
     *
     * @param string $xSetEmail
     * @return AaaUser
     */
    public function setXSetEmail($xSetEmail)
    {
        $this->xSetEmail = $xSetEmail;

        return $this;
    }

    /**
     * Get xSetEmail
     *
     * @return string 
     */
    public function getXSetEmail()
    {
        return $this->xSetEmail;
    }

    /**
     * Set xSetName
     *
     * @param string $xSetName
     * @return AaaUser
     */
    public function setXSetName($xSetName)
    {
        $this->xSetName = $xSetName;

        return $this;
    }

    /**
     * Get xSetName
     *
     * @return string 
     */
    public function getXSetName()
    {
        return $this->xSetName;
    }

    /**
     * Set xSetStreet
     *
     * @param string $xSetStreet
     * @return AaaUser
     */
    public function setXSetStreet($xSetStreet)
    {
        $this->xSetStreet = $xSetStreet;

        return $this;
    }

    /**
     * Get xSetStreet
     *
     * @return string 
     */
    public function getXSetStreet()
    {
        return $this->xSetStreet;
    }

    /**
     * Set xSetStreetnr
     *
     * @param string $xSetStreetnr
     * @return AaaUser
     */
    public function setXSetStreetnr($xSetStreetnr)
    {
        $this->xSetStreetnr = $xSetStreetnr;

        return $this;
    }

    /**
     * Get xSetStreetnr
     *
     * @return string 
     */
    public function getXSetStreetnr()
    {
        return $this->xSetStreetnr;
    }

    /**
     * Set xSetPlz
     *
     * @param string $xSetPlz
     * @return AaaUser
     */
    public function setXSetPlz($xSetPlz)
    {
        $this->xSetPlz = $xSetPlz;

        return $this;
    }

    /**
     * Get xSetPlz
     *
     * @return string 
     */
    public function getXSetPlz()
    {
        return $this->xSetPlz;
    }

    /**
     * Set xSetCity
     *
     * @param string $xSetCity
     * @return AaaUser
     */
    public function setXSetCity($xSetCity)
    {
        $this->xSetCity = $xSetCity;

        return $this;
    }

    /**
     * Get xSetCity
     *
     * @return string 
     */
    public function getXSetCity()
    {
        return $this->xSetCity;
    }

    /**
     * Set xSetBirthday
     *
     * @param string $xSetBirthday
     * @return AaaUser
     */
    public function setXSetBirthday($xSetBirthday)
    {
        $this->xSetBirthday = $xSetBirthday;

        return $this;
    }

    /**
     * Get xSetBirthday
     *
     * @return string 
     */
    public function getXSetBirthday()
    {
        return $this->xSetBirthday;
    }

    /**
     * Set xSetSternzeichen
     *
     * @param string $xSetSternzeichen
     * @return AaaUser
     */
    public function setXSetSternzeichen($xSetSternzeichen)
    {
        $this->xSetSternzeichen = $xSetSternzeichen;

        return $this;
    }

    /**
     * Get xSetSternzeichen
     *
     * @return string 
     */
    public function getXSetSternzeichen()
    {
        return $this->xSetSternzeichen;
    }

    /**
     * Set xSetBeziehung
     *
     * @param string $xSetBeziehung
     * @return AaaUser
     */
    public function setXSetBeziehung($xSetBeziehung)
    {
        $this->xSetBeziehung = $xSetBeziehung;

        return $this;
    }

    /**
     * Get xSetBeziehung
     *
     * @return string 
     */
    public function getXSetBeziehung()
    {
        return $this->xSetBeziehung;
    }

    /**
     * Set xSetKinder
     *
     * @param string $xSetKinder
     * @return AaaUser
     */
    public function setXSetKinder($xSetKinder)
    {
        $this->xSetKinder = $xSetKinder;

        return $this;
    }

    /**
     * Get xSetKinder
     *
     * @return string 
     */
    public function getXSetKinder()
    {
        return $this->xSetKinder;
    }

    /**
     * Set xSetHaushalt
     *
     * @param string $xSetHaushalt
     * @return AaaUser
     */
    public function setXSetHaushalt($xSetHaushalt)
    {
        $this->xSetHaushalt = $xSetHaushalt;

        return $this;
    }

    /**
     * Get xSetHaushalt
     *
     * @return string 
     */
    public function getXSetHaushalt()
    {
        return $this->xSetHaushalt;
    }

    /**
     * Set xSetHaarfarbe
     *
     * @param string $xSetHaarfarbe
     * @return AaaUser
     */
    public function setXSetHaarfarbe($xSetHaarfarbe)
    {
        $this->xSetHaarfarbe = $xSetHaarfarbe;

        return $this;
    }

    /**
     * Get xSetHaarfarbe
     *
     * @return string 
     */
    public function getXSetHaarfarbe()
    {
        return $this->xSetHaarfarbe;
    }

    /**
     * Set xSetAugenfarbe
     *
     * @param string $xSetAugenfarbe
     * @return AaaUser
     */
    public function setXSetAugenfarbe($xSetAugenfarbe)
    {
        $this->xSetAugenfarbe = $xSetAugenfarbe;

        return $this;
    }

    /**
     * Get xSetAugenfarbe
     *
     * @return string 
     */
    public function getXSetAugenfarbe()
    {
        return $this->xSetAugenfarbe;
    }

    /**
     * Set xSetGewicht
     *
     * @param string $xSetGewicht
     * @return AaaUser
     */
    public function setXSetGewicht($xSetGewicht)
    {
        $this->xSetGewicht = $xSetGewicht;

        return $this;
    }

    /**
     * Get xSetGewicht
     *
     * @return string 
     */
    public function getXSetGewicht()
    {
        return $this->xSetGewicht;
    }

    /**
     * Set xSetGroesse
     *
     * @param string $xSetGroesse
     * @return AaaUser
     */
    public function setXSetGroesse($xSetGroesse)
    {
        $this->xSetGroesse = $xSetGroesse;

        return $this;
    }

    /**
     * Get xSetGroesse
     *
     * @return string 
     */
    public function getXSetGroesse()
    {
        return $this->xSetGroesse;
    }

    /**
     * Set xSetAlkohol
     *
     * @param string $xSetAlkohol
     * @return AaaUser
     */
    public function setXSetAlkohol($xSetAlkohol)
    {
        $this->xSetAlkohol = $xSetAlkohol;

        return $this;
    }

    /**
     * Get xSetAlkohol
     *
     * @return string 
     */
    public function getXSetAlkohol()
    {
        return $this->xSetAlkohol;
    }

    /**
     * Set xSetRaucher
     *
     * @param string $xSetRaucher
     * @return AaaUser
     */
    public function setXSetRaucher($xSetRaucher)
    {
        $this->xSetRaucher = $xSetRaucher;

        return $this;
    }

    /**
     * Get xSetRaucher
     *
     * @return string 
     */
    public function getXSetRaucher()
    {
        return $this->xSetRaucher;
    }

    /**
     * Set xSetMobil
     *
     * @param string $xSetMobil
     * @return AaaUser
     */
    public function setXSetMobil($xSetMobil)
    {
        $this->xSetMobil = $xSetMobil;

        return $this;
    }

    /**
     * Get xSetMobil
     *
     * @return string 
     */
    public function getXSetMobil()
    {
        return $this->xSetMobil;
    }

    /**
     * Set xSetPhone1
     *
     * @param string $xSetPhone1
     * @return AaaUser
     */
    public function setXSetPhone1($xSetPhone1)
    {
        $this->xSetPhone1 = $xSetPhone1;

        return $this;
    }

    /**
     * Get xSetPhone1
     *
     * @return string 
     */
    public function getXSetPhone1()
    {
        return $this->xSetPhone1;
    }

    /**
     * Set xSetPhone2
     *
     * @param string $xSetPhone2
     * @return AaaUser
     */
    public function setXSetPhone2($xSetPhone2)
    {
        $this->xSetPhone2 = $xSetPhone2;

        return $this;
    }

    /**
     * Get xSetPhone2
     *
     * @return string 
     */
    public function getXSetPhone2()
    {
        return $this->xSetPhone2;
    }

    /**
     * Set xSetPhone3
     *
     * @param string $xSetPhone3
     * @return AaaUser
     */
    public function setXSetPhone3($xSetPhone3)
    {
        $this->xSetPhone3 = $xSetPhone3;

        return $this;
    }

    /**
     * Get xSetPhone3
     *
     * @return string 
     */
    public function getXSetPhone3()
    {
        return $this->xSetPhone3;
    }

    /**
     * Set xSetFax
     *
     * @param string $xSetFax
     * @return AaaUser
     */
    public function setXSetFax($xSetFax)
    {
        $this->xSetFax = $xSetFax;

        return $this;
    }

    /**
     * Get xSetFax
     *
     * @return string 
     */
    public function getXSetFax()
    {
        return $this->xSetFax;
    }

    /**
     * Set xSetFacebook
     *
     * @param string $xSetFacebook
     * @return AaaUser
     */
    public function setXSetFacebook($xSetFacebook)
    {
        $this->xSetFacebook = $xSetFacebook;

        return $this;
    }

    /**
     * Get xSetFacebook
     *
     * @return string 
     */
    public function getXSetFacebook()
    {
        return $this->xSetFacebook;
    }

    /**
     * Set xSetSkype
     *
     * @param string $xSetSkype
     * @return AaaUser
     */
    public function setXSetSkype($xSetSkype)
    {
        $this->xSetSkype = $xSetSkype;

        return $this;
    }

    /**
     * Get xSetSkype
     *
     * @return string 
     */
    public function getXSetSkype()
    {
        return $this->xSetSkype;
    }

    /**
     * Set xSetIcq
     *
     * @param string $xSetIcq
     * @return AaaUser
     */
    public function setXSetIcq($xSetIcq)
    {
        $this->xSetIcq = $xSetIcq;

        return $this;
    }

    /**
     * Get xSetIcq
     *
     * @return string 
     */
    public function getXSetIcq()
    {
        return $this->xSetIcq;
    }

    /**
     * Set xSetUe30
     *
     * @param string $xSetUe30
     * @return AaaUser
     */
    public function setXSetUe30($xSetUe30)
    {
        $this->xSetUe30 = $xSetUe30;

        return $this;
    }

    /**
     * Get xSetUe30
     *
     * @return string 
     */
    public function getXSetUe30()
    {
        return $this->xSetUe30;
    }

    /**
     * Set xSetHomepage
     *
     * @param string $xSetHomepage
     * @return AaaUser
     */
    public function setXSetHomepage($xSetHomepage)
    {
        $this->xSetHomepage = $xSetHomepage;

        return $this;
    }

    /**
     * Get xSetHomepage
     *
     * @return string 
     */
    public function getXSetHomepage()
    {
        return $this->xSetHomepage;
    }

    /**
     * Set xSetIchMag
     *
     * @param string $xSetIchMag
     * @return AaaUser
     */
    public function setXSetIchMag($xSetIchMag)
    {
        $this->xSetIchMag = $xSetIchMag;

        return $this;
    }

    /**
     * Get xSetIchMag
     *
     * @return string 
     */
    public function getXSetIchMag()
    {
        return $this->xSetIchMag;
    }

    /**
     * Set xSetIchMagNicht
     *
     * @param string $xSetIchMagNicht
     * @return AaaUser
     */
    public function setXSetIchMagNicht($xSetIchMagNicht)
    {
        $this->xSetIchMagNicht = $xSetIchMagNicht;

        return $this;
    }

    /**
     * Get xSetIchMagNicht
     *
     * @return string 
     */
    public function getXSetIchMagNicht()
    {
        return $this->xSetIchMagNicht;
    }

    /**
     * Set xSetLieblingsfilm
     *
     * @param string $xSetLieblingsfilm
     * @return AaaUser
     */
    public function setXSetLieblingsfilm($xSetLieblingsfilm)
    {
        $this->xSetLieblingsfilm = $xSetLieblingsfilm;

        return $this;
    }

    /**
     * Get xSetLieblingsfilm
     *
     * @return string 
     */
    public function getXSetLieblingsfilm()
    {
        return $this->xSetLieblingsfilm;
    }

    /**
     * Set xSetLieblingslied
     *
     * @param string $xSetLieblingslied
     * @return AaaUser
     */
    public function setXSetLieblingslied($xSetLieblingslied)
    {
        $this->xSetLieblingslied = $xSetLieblingslied;

        return $this;
    }

    /**
     * Get xSetLieblingslied
     *
     * @return string 
     */
    public function getXSetLieblingslied()
    {
        return $this->xSetLieblingslied;
    }

    /**
     * Set xSetLieblingsessen
     *
     * @param string $xSetLieblingsessen
     * @return AaaUser
     */
    public function setXSetLieblingsessen($xSetLieblingsessen)
    {
        $this->xSetLieblingsessen = $xSetLieblingsessen;

        return $this;
    }

    /**
     * Get xSetLieblingsessen
     *
     * @return string 
     */
    public function getXSetLieblingsessen()
    {
        return $this->xSetLieblingsessen;
    }

    /**
     * Set xSetMusikrichtung
     *
     * @param string $xSetMusikrichtung
     * @return AaaUser
     */
    public function setXSetMusikrichtung($xSetMusikrichtung)
    {
        $this->xSetMusikrichtung = $xSetMusikrichtung;

        return $this;
    }

    /**
     * Get xSetMusikrichtung
     *
     * @return string 
     */
    public function getXSetMusikrichtung()
    {
        return $this->xSetMusikrichtung;
    }

    /**
     * Set xSetHobbies
     *
     * @param string $xSetHobbies
     * @return AaaUser
     */
    public function setXSetHobbies($xSetHobbies)
    {
        $this->xSetHobbies = $xSetHobbies;

        return $this;
    }

    /**
     * Get xSetHobbies
     *
     * @return string 
     */
    public function getXSetHobbies()
    {
        return $this->xSetHobbies;
    }

    /**
     * Set xSetBeruf
     *
     * @param string $xSetBeruf
     * @return AaaUser
     */
    public function setXSetBeruf($xSetBeruf)
    {
        $this->xSetBeruf = $xSetBeruf;

        return $this;
    }

    /**
     * Get xSetBeruf
     *
     * @return string 
     */
    public function getXSetBeruf()
    {
        return $this->xSetBeruf;
    }

    /**
     * Set xSetSchulabschluss
     *
     * @param string $xSetSchulabschluss
     * @return AaaUser
     */
    public function setXSetSchulabschluss($xSetSchulabschluss)
    {
        $this->xSetSchulabschluss = $xSetSchulabschluss;

        return $this;
    }

    /**
     * Get xSetSchulabschluss
     *
     * @return string 
     */
    public function getXSetSchulabschluss()
    {
        return $this->xSetSchulabschluss;
    }

    /**
     * Set xLogin
     *
     * @param string $xLogin
     * @return AaaUser
     */
    public function setXLogin($xLogin)
    {
        $this->xLogin = $xLogin;

        return $this;
    }

    /**
     * Get xLogin
     *
     * @return string 
     */
    public function getXLogin()
    {
        return $this->xLogin;
    }

    /**
     * Set loginTimestamp
     *
     * @param \DateTime $loginTimestamp
     * @return AaaUser
     */
    public function setLoginTimestamp($loginTimestamp)
    {
        $this->loginTimestamp = $loginTimestamp;

        return $this;
    }

    /**
     * Get loginTimestamp
     *
     * @return \DateTime 
     */
    public function getLoginTimestamp()
    {
        return $this->loginTimestamp;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return AaaUser
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set ipAdresse
     *
     * @param string $ipAdresse
     * @return AaaUser
     */
    public function setIpAdresse($ipAdresse)
    {
        $this->ipAdresse = $ipAdresse;

        return $this;
    }

    /**
     * Get ipAdresse
     *
     * @return string 
     */
    public function getIpAdresse()
    {
        return $this->ipAdresse;
    }

    /**
     * Set hostname
     *
     * @param string $hostname
     * @return AaaUser
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * Get hostname
     *
     * @return string 
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Set xAgbs
     *
     * @param string $xAgbs
     * @return AaaUser
     */
    public function setXAgbs($xAgbs)
    {
        $this->xAgbs = $xAgbs;

        return $this;
    }

    /**
     * Get xAgbs
     *
     * @return string 
     */
    public function getXAgbs()
    {
        return $this->xAgbs;
    }

    /**
     * Set xNewsletter
     *
     * @param string $xNewsletter
     * @return AaaUser
     */
    public function setXNewsletter($xNewsletter)
    {
        $this->xNewsletter = $xNewsletter;

        return $this;
    }

    /**
     * Get xNewsletter
     *
     * @return string 
     */
    public function getXNewsletter()
    {
        return $this->xNewsletter;
    }

    /**
     * Set facebookId
     *
     * @param string $facebookId
     * @return AaaUser
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return string 
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * Set alterWichtigkeit
     *
     * @param integer $alterWichtigkeit
     * @return AaaUser
     */
    public function setAlterWichtigkeit($alterWichtigkeit)
    {
        $this->alterWichtigkeit = $alterWichtigkeit;

        return $this;
    }

    /**
     * Get alterWichtigkeit
     *
     * @return integer 
     */
    public function getAlterWichtigkeit()
    {
        return $this->alterWichtigkeit;
    }

    /**
     * Set groesseWichtigkeit
     *
     * @param integer $groesseWichtigkeit
     * @return AaaUser
     */
    public function setGroesseWichtigkeit($groesseWichtigkeit)
    {
        $this->groesseWichtigkeit = $groesseWichtigkeit;

        return $this;
    }

    /**
     * Get groesseWichtigkeit
     *
     * @return integer 
     */
    public function getGroesseWichtigkeit()
    {
        return $this->groesseWichtigkeit;
    }

    /**
     * Set groesseGleichheit
     *
     * @param integer $groesseGleichheit
     * @return AaaUser
     */
    public function setGroesseGleichheit($groesseGleichheit)
    {
        $this->groesseGleichheit = $groesseGleichheit;

        return $this;
    }

    /**
     * Get groesseGleichheit
     *
     * @return integer 
     */
    public function getGroesseGleichheit()
    {
        return $this->groesseGleichheit;
    }

    /**
     * Set schulabschlussWichtigkeit
     *
     * @param integer $schulabschlussWichtigkeit
     * @return AaaUser
     */
    public function setSchulabschlussWichtigkeit($schulabschlussWichtigkeit)
    {
        $this->schulabschlussWichtigkeit = $schulabschlussWichtigkeit;

        return $this;
    }

    /**
     * Get schulabschlussWichtigkeit
     *
     * @return integer 
     */
    public function getSchulabschlussWichtigkeit()
    {
        return $this->schulabschlussWichtigkeit;
    }
}
