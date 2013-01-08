package backend;

import java.util.HashMap;

public class Trip {

	public Trip(String title, String von, String nach, String skipper,
			String crew, String start, String ende, double dauer, int motor,
			int tankgefuellt, String notes, String registernr) {
		super();
		this.title = title;
		this.von = von;
		this.nach = nach;
		this.skipper = skipper;
		this.crew = crew;
		this.start = start;
		this.ende = ende;
		this.dauer = dauer;
		this.motor = motor;
		this.tankgefuellt = tankgefuellt;
		this.notes = notes;
		this.registernr = registernr;
		this.entryMap = new HashMap<String, Entry>();
	}
	public Trip(String title2, String von2, String nach2, String skipper2,
			String crew2, String start2, String ende2, double dauer2,
			int motor2, boolean tankgefuellt2, String notes2, String registernr2) {
		// TODO Auto-generated constructor stub
	}
	public String getTitle() {
		return title;
	}
	public void setTitle(String title) {
		this.title = title;
	}
	public String getVon() {
		return von;
	}
	public void setVon(String von) {
		this.von = von;
	}
	public String getNach() {
		return nach;
	}
	public void setNach(String nach) {
		this.nach = nach;
	}
	public String getSkipper() {
		return skipper;
	}
	public void setSkipper(String skipper) {
		this.skipper = skipper;
	}
	public String getCrew() {
		return crew;
	}
	public void setCrew(String crew) {
		this.crew = crew;
	}
	public String getStart() {
		return start;
	}
	public void setStart(String start) {
		this.start = start;
	}
	public String getEnde() {
		return ende;
	}
	public void setEnde(String ende) {
		this.ende = ende;
	}
	public double getDauer() {
		return dauer;
	}
	public void setDauer(double dauer) {
		this.dauer = dauer;
	}
	public int getMotor() {
		return motor;
	}
	public void setMotor(int motor) {
		this.motor = motor;
	}
	public int getTankgefuellt() {
		return tankgefuellt;
	}
	public void setTankgefuellt(int tankgefuellt) {
		this.tankgefuellt = tankgefuellt;
	}
	public String getNotes() {
		return notes;
	}
	public void setNotes(String notes) {
		this.notes = notes;
	}
	public String getRegisternr() {
		return registernr;
	}
	public void setRegisternr(String registernr) {
		this.registernr = registernr;
	}
	public HashMap<String, Entry> getEntryMap() {
		return entryMap;
	}
	public void setEntryMap(HashMap<String, Entry> entryMap) {
		this.entryMap = entryMap;
	}
	private String title;
	private String von;
	private String nach;
	private String skipper;
	private String crew;
	private String start;
	private String ende;
	private double dauer;
	private int motor;
	private int tankgefuellt=0;
	private String notes;
	private String registernr;
	private HashMap<String, Entry> entryMap;
	
}
