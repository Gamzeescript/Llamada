package com.ampersand.llamada.beans;

import java.util.ArrayList;
import java.util.List;
import javax.persistence.FetchType;
import javax.persistence.OneToMany;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;

/** Entidad de la cual crearemos la persistencia y de donde se consumiran nuestros datos */

@Entity
@Table(name="origen_llamada")
@JsonIgnoreProperties({"hibernateLazyInitializer","handler"})
public class OrigenLlamada {
	
	private long id_origen_llamada;
	private String origen_llamada;
	private List<Gestion> gestion = new ArrayList<Gestion>(0);
	
	
	public OrigenLlamada() {

	}


	public OrigenLlamada(long id_origen_llamada, String origen_llamada, List<Gestion> gestion) {
		super();
		this.id_origen_llamada = id_origen_llamada;
		this.origen_llamada = origen_llamada;
		this.gestion = gestion;
	}


	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="id_origen_llamada")
	public long getId_origen_llamada() {
		return id_origen_llamada;
	}


	public void setId_origen_llamada(long id_origen_llamada) {
		this.id_origen_llamada = id_origen_llamada;
	}


	@Column(name="origen_llamada")
	public String getOrigen_llamada() {
		return origen_llamada;
	}


	public void setOrigen_llamada(String origen_llamada) {
		this.origen_llamada = origen_llamada;
	}

	@OneToMany(fetch = FetchType.LAZY, mappedBy = "origenLlamada")
	public List<Gestion> getGestion() {
		return gestion;
	}


	public void setGestion(List<Gestion> gestion) {
		this.gestion = gestion;
	}
	
	
	
	

	

}
