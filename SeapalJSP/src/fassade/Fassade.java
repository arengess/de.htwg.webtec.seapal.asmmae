package fassade;

import java.sql.*;
import java.util.HashMap;
import backend.*;

public class Fassade {
	private Connection connection;

	public Fassade() {
		try {
			connection = new DBAccess().getConnection();
			// connection.close();
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	// <-------------Boot------------->
	public HashMap<String, BootDTO> getUebersicht() {
		HashMap<String, BootDTO> bootDTOMap = new HashMap<String, BootDTO>();
		try {
			ResultSet result = connection.createStatement().executeQuery(
					"Select * From boatinformation");
			while (result.next()) {
				bootDTOMap.put(
						result.getString("registernr"),
						new BootDTO(result.getString("registernr"), result
								.getString("bootsname"), result
								.getString("segelzeichen"), result
								.getString("heimathafen"), result
								.getString("yachtclub"), result
								.getString("eigner"), result
								.getString("versicherung"), result
								.getString("rufzeichen"), result
								.getString("typ"), result
								.getString("konstrukteur"), result
								.getDouble("laenge"), result
								.getDouble("breite"), result
								.getDouble("tiefgang"), result
								.getDouble("masthoehe"), result
								.getDouble("verdraengung"), result
								.getString("rigArt"), result.getInt("baujahr"),
								result.getString("motor"), result
										.getDouble("tankgroesse"), result
										.getDouble("wassertankgroesse"), result
										.getDouble("abwassertankgroesse"),
								result.getDouble("grosssegelgroesse"), result
										.getDouble("genuagroesse"), result
										.getDouble("spiegroesse")));
			}
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return bootDTOMap;
	}

	public BootDTO getBoot(String key) {
		BootDTO bootDTO = null;
		try {
			ResultSet result = connection.createStatement().executeQuery(
					"Select * From boatinformation where registernr='" + key
							+ "'");
			bootDTO = new BootDTO(result.getString("registernr"),
					result.getString("bootsname"),
					result.getString("segelzeichen"),
					result.getString("heimathafen"),
					result.getString("yachtclub"), result.getString("eigner"),
					result.getString("versicherung"),
					result.getString("rufzeichen"), result.getString("typ"),
					result.getString("konstrukteur"),
					result.getDouble("laenge"), result.getDouble("breite"),
					result.getDouble("tiefgang"),
					result.getDouble("masthoehe"),
					result.getDouble("verdraengung"),
					result.getString("rigArt"), result.getInt("baujahr"),
					result.getString("motor"), result.getDouble("tankgroesse"),
					result.getDouble("wassertankgroesse"),
					result.getDouble("abwassertankgroesse"),
					result.getDouble("grosssegelgroesse"),
					result.getDouble("genuagroesse"),
					result.getDouble("spiegroesse"));
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return bootDTO;
	}

	public void saveBoot(BootDTO bootDTO) {
		try {
			Statement myStatement = connection.createStatement();
			myStatement.execute("insert into boatinformation values ('"
					+ bootDTO.registernr + "', '" + bootDTO.bootsname + "', '"
					+ bootDTO.segelzeichen + "', '" + bootDTO.heimathafen
					+ "', '" + bootDTO.yachtclub + "','" + bootDTO.eigner
					+ "','" + bootDTO.versicherung + "', '"
					+ bootDTO.rufzeichen + "', '" + bootDTO.typ + "', '"
					+ bootDTO.konstrukteur + "', " + bootDTO.laenge + ", "
					+ bootDTO.breite + ", " + bootDTO.tiefgang + ", "
					+ bootDTO.masthoehe + ", " + bootDTO.verdraengung + ", '"
					+ bootDTO.rigArt + "', " + bootDTO.baujahr + ", '"
					+ bootDTO.motor + "', " + bootDTO.tankgroesse + ","
					+ bootDTO.wassertankgroesse + ","
					+ bootDTO.abwassertankgroesse + ", "
					+ bootDTO.grosssegelgroesse + ", " + bootDTO.genuagroesse
					+ ", " + bootDTO.spigroesse
					+ ") ON DUPLICATE KEY UPDATE bootsname='"
					+ bootDTO.bootsname + "', segelzeichen='"
					+ bootDTO.segelzeichen + "',heimathafen='"
					+ bootDTO.heimathafen + "',yachtclub='" + bootDTO.yachtclub
					+ "',eigner='" + bootDTO.eigner + "',versicherung='"
					+ bootDTO.versicherung + "',rufzeichen='"
					+ bootDTO.rufzeichen + "',typ='" + bootDTO.typ
					+ "',konstrukteur='" + bootDTO.konstrukteur + "',laenge='"
					+ bootDTO.laenge + "',breite='" + bootDTO.breite
					+ "',tiefgang='" + bootDTO.tiefgang + "',masthoehe='"
					+ bootDTO.masthoehe + "',verdraengung='"
					+ bootDTO.verdraengung + "',rigart='" + bootDTO.rigArt
					+ "',baujahr='" + bootDTO.baujahr + "',motor='"
					+ bootDTO.motor + "',tankgroesse='" + bootDTO.tankgroesse
					+ "',wassertankgroesse='" + bootDTO.wassertankgroesse
					+ "',abwassertankgroesse='" + bootDTO.abwassertankgroesse
					+ "',grosssegelgroesse='" + bootDTO.grosssegelgroesse
					+ "',genuagroesse='" + bootDTO.genuagroesse
					+ "',spiegroesse='" + bootDTO.spigroesse + "'");
			myStatement.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	}

	public void deleteBoot(String key) {
		try {
			// connection = new DBAccess().getConnection();
			connection.createStatement().executeQuery(
					"DELETE FROM boatinformation WHERE registernr='" + key
							+ "'");
			// connection.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}

	// <-------------Trip------------->
	public HashMap<String, TripDTO> getTripList(String registernr) {
		HashMap<String, TripDTO> tripDTOMap = new HashMap<String, TripDTO>();
		try {
			ResultSet result = connection.createStatement().executeQuery(
					"Select * From tripinformation where registernr='"
							+ registernr + "'");
			while (result.next()) {
				tripDTOMap.put(
						result.getString("title"),
						new TripDTO(result.getString("title"), result
								.getString("von"), result.getString("nach"),
								result.getString("skipper"), result
										.getString("crew"), result
										.getString("start"), result
										.getString("ende"), result
										.getDouble("dauer"), result
										.getInt("motor"), result
										.getBoolean("tankgefuellt"), result
										.getString("notes"), result
										.getString("registernr")));
			}

		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return tripDTOMap;
	}

	public void addTrip(TripDTO tripDTO) {
		try {
			connection.createStatement().executeQuery(
					"insert into tripinformation VALUES ('" + tripDTO.title
							+ "','" + tripDTO.von + "','" + tripDTO.nach
							+ "','" + tripDTO.skipper + "','" + tripDTO.crew
							+ "','" + tripDTO.start + "','" + tripDTO.ende
							+ "','" + tripDTO.dauer + "','" + tripDTO.motor
							+ "','" + tripDTO.tankgefuellt + "','"
							+ tripDTO.notes + "','" + tripDTO.registernr
							+ "')ON DUPLICATE KEY UPDATE title='"
							+ tripDTO.title + "', von='" + tripDTO.von
							+ "',nach='" + tripDTO.nach + "',skipper='"
							+ tripDTO.skipper + "',crew='" + tripDTO.crew
							+ "',start='" + tripDTO.start + "',ende='"
							+ tripDTO.ende + "',dauer='" + tripDTO.dauer
							+ "',motor='" + tripDTO.motor + "',tankgefuellt='"
							+ tripDTO.tankgefuellt + "',notes='"
							+ tripDTO.notes + "',registernr='"
							+ tripDTO.registernr + "'");
			// connection.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
	// <-------------Entry------------->
}
