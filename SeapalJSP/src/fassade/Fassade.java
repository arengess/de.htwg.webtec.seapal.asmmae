package fassade;

import java.sql.*;
import java.util.HashMap;
import backend.Boot;
import backend.DBAccess;

public class Fassade {
	private HashMap<String, Boot> bootMap;
	private Connection connection;

	public Fassade() {
		try {
		connection = new DBAccess().getConnection();
		bootMap = new HashMap<String, backend.Boot>();
		ResultSet result;
		result = connection.createStatement().executeQuery("Select * From boatinformation");
		
		while(result.next()){
			bootMap.put(result.getString("registernr"), new Boot(result.getString("registernr"),
		result.getString("bootsname"), result.getString("segelzeichen"), result.getString("heimathafen"),
		result.getString("yachtclub"), result.getString("eigner"), result.getString("versicherung"),
		result.getString("rufzeichen"), result.getString("typ"), result.getString("konstrukteur"),
		result.getDouble("laenge"), result.getDouble("breite"), result.getDouble("tiefgang"),
		result.getDouble("masthoehe"), result.getDouble("verdraengung"), result.getString("rigArt"),
		result.getInt("baujahr"),result.getString("motor"), result.getDouble("tankgroesse"),
		result.getDouble("wassertankgroesse"), result.getDouble("abwassertankgroesse"),
		result.getDouble("grosssegelgroesse"), result.getDouble("genuagroesse"),
		result.getDouble("spiegroesse")));
		}
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	public HashMap<String, fassade.BootDTO> getUebersicht() {
		HashMap<String, fassade.BootDTO> bootDTOMap = new HashMap<String, fassade.BootDTO>();
		for (String key : bootMap.keySet()) {
			BootDTO bootDTO = new BootDTO();
			bootDTO.bootsname = bootMap.get(key).getBootsname();
			bootDTO.registernr = bootMap.get(key).getRegisternr();
			bootDTO.segelzeichen = bootMap.get(key).getSegelzeichen();
			bootDTO.heimathafen = bootMap.get(key).getHeimathafen();
			bootDTO.yachtclub = bootMap.get(key).getYachtclub();
			bootDTO.eigner = bootMap.get(key).getEigner();
			bootDTO.versicherung = bootMap.get(key).getVersicherung();
			bootDTO.rufzeichen = bootMap.get(key).getRufzeichen();
			bootDTO.typ = bootMap.get(key).getTyp();
			bootDTO.konstrukteur = bootMap.get(key).getKonstrukteur();
			bootDTO.laenge = bootMap.get(key).getLaenge();
			bootDTO.breite = bootMap.get(key).getBreite();
			bootDTO.tiefgang = bootMap.get(key).getTiefgang();
			bootDTO.masthoehe = bootMap.get(key).getMasthoehe();
			bootDTO.verdraengung = bootMap.get(key).getVerdraengung();
			bootDTO.rigArt = bootMap.get(key).getRigArt();
			bootDTO.baujahr = bootMap.get(key).getBaujahr();
			bootDTO.motor = bootMap.get(key).getMotor();
			bootDTO.tankgroesse = bootMap.get(key).getTankgroesse();
			bootDTO.wassertankgroesse = bootMap.get(key).getWassertankgoesse();
			bootDTO.abwassertankgroesse = bootMap.get(key)
					.getAbwassertankgroesse();
			bootDTO.grosssegelgroesse = bootMap.get(key).getGrosssegelgroesse();
			bootDTO.genuagroesse = bootMap.get(key).getGenuagroesse();
			bootDTO.spigroesse = bootMap.get(key).getSpiegroesse();
			bootDTOMap.put(key, bootDTO);
		}
		return bootDTOMap;
	}

	public BootDTO getBoot(String key) {
		BootDTO bootDTO = new BootDTO();
		bootDTO.bootsname = bootMap.get(key).getBootsname();
		bootDTO.registernr = bootMap.get(key).getRegisternr();
		bootDTO.segelzeichen = bootMap.get(key).getSegelzeichen();
		bootDTO.heimathafen = bootMap.get(key).getHeimathafen();
		bootDTO.yachtclub = bootMap.get(key).getYachtclub();
		bootDTO.eigner = bootMap.get(key).getEigner();
		bootDTO.versicherung = bootMap.get(key).getVersicherung();
		bootDTO.rufzeichen = bootMap.get(key).getRufzeichen();
		bootDTO.typ = bootMap.get(key).getTyp();
		bootDTO.konstrukteur = bootMap.get(key).getKonstrukteur();
		bootDTO.laenge = bootMap.get(key).getLaenge();
		bootDTO.breite = bootMap.get(key).getBreite();
		bootDTO.tiefgang = bootMap.get(key).getTiefgang();
		bootDTO.masthoehe = bootMap.get(key).getMasthoehe();
		bootDTO.verdraengung = bootMap.get(key).getVerdraengung();
		bootDTO.rigArt = bootMap.get(key).getRigArt();
		bootDTO.baujahr = bootMap.get(key).getBaujahr();
		bootDTO.motor = bootMap.get(key).getMotor();
		bootDTO.tankgroesse = bootMap.get(key).getTankgroesse();
		bootDTO.wassertankgroesse = bootMap.get(key).getWassertankgoesse();
		bootDTO.abwassertankgroesse = bootMap.get(key).getAbwassertankgroesse();
		bootDTO.grosssegelgroesse = bootMap.get(key).getGrosssegelgroesse();
		bootDTO.genuagroesse = bootMap.get(key).getGenuagroesse();
		bootDTO.spigroesse = bootMap.get(key).getSpiegroesse();
		return bootDTO;
	}

	public void saveBoot(BootDTO bootDTO) throws ClassNotFoundException,
			SQLException {
		bootMap.put(bootDTO.registernr, new Boot(bootDTO.registernr,
				bootDTO.bootsname, bootDTO.segelzeichen, bootDTO.heimathafen,
				bootDTO.yachtclub, bootDTO.eigner, bootDTO.versicherung,
				bootDTO.rufzeichen, bootDTO.typ, bootDTO.konstrukteur,
				bootDTO.laenge, bootDTO.breite, bootDTO.tiefgang,
				bootDTO.masthoehe, bootDTO.verdraengung, bootDTO.rigArt,
				bootDTO.baujahr, bootDTO.motor, bootDTO.tankgroesse,
				bootDTO.wassertankgroesse, bootDTO.abwassertankgroesse,
				bootDTO.grosssegelgroesse, bootDTO.genuagroesse,
				bootDTO.spigroesse));
		Statement myStatement = connection.createStatement();
		myStatement.execute("insert into seapal.boatinformation values ('"
				+ bootDTO.registernr + "', '" + bootDTO.bootsname + "', '"
				+ bootDTO.segelzeichen + "', '" + bootDTO.heimathafen + "', '"
				+ bootDTO.yachtclub + "','" + bootDTO.eigner + "','"
				+ bootDTO.versicherung + "', '" + bootDTO.rufzeichen + "', '"
				+ bootDTO.typ + "', '" + bootDTO.konstrukteur + "', "
				+ bootDTO.laenge + ", " + bootDTO.breite + ", "
				+ bootDTO.tiefgang + ", " + bootDTO.masthoehe + ", "
				+ bootDTO.verdraengung + ", '" + bootDTO.rigArt + "', "
				+ bootDTO.baujahr + ", '" + bootDTO.motor + "', "
				+ bootDTO.tankgroesse + "," + bootDTO.wassertankgroesse + ","
				+ bootDTO.abwassertankgroesse + ", "
				+ bootDTO.grosssegelgroesse + ", " + bootDTO.genuagroesse
				+ ", " + bootDTO.spigroesse
				+ ") ON DUPLICATE KEY UPDATE bootsname='" + bootDTO.bootsname
				+ "', segelzeichen='" + bootDTO.segelzeichen
				+ "',heimathafen='" + bootDTO.heimathafen + "',yachtclub='"
				+ bootDTO.yachtclub + "',eigner='" + bootDTO.eigner
				+ "',versicherung='" + bootDTO.versicherung + "',rufzeichen='"
				+ bootDTO.rufzeichen + "',typ='" + bootDTO.typ
				+ "',konstrukteur='" + bootDTO.konstrukteur + "',laenge='"
				+ bootDTO.laenge + "',breite='" + bootDTO.breite
				+ "',tiefgang='" + bootDTO.tiefgang + "',masthoehe='"
				+ bootDTO.masthoehe + "',verdraengung='" + bootDTO.verdraengung
				+ "',rigart='" + bootDTO.rigArt + "',baujahr='"
				+ bootDTO.baujahr + "',motor='" + bootDTO.motor
				+ "',tankgroesse='" + bootDTO.tankgroesse
				+ "',wassertankgroesse='" + bootDTO.wassertankgroesse
				+ "',abwassertankgroesse='" + bootDTO.abwassertankgroesse
				+ "',grosssegelgroesse='" + bootDTO.grosssegelgroesse
				+ "',genuagroesse='" + bootDTO.genuagroesse + "',spiegroesse='"
				+ bootDTO.spigroesse + "'");
		myStatement.close();
	}
}
