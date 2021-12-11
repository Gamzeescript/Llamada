package com.ampersand.llamada.beans;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;
import javax.persistence.FetchType;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;

import com.fasterxml.jackson.annotation.JsonIgnoreProperties;

/** Entidad de la cual crearemos la persistencia y de donde se consumiran nuestros datos */


@Entity
@Table(name="gestion")
@JsonIgnoreProperties({"hibernateLazyInitializer","handler"})
public class Gestion {
	
	private long id_gestion;
	private String nombre;
	private String telefono;
	private String gestion;
	private TipoLlamada tipoLlamada;
	private OrigenLlamada origenLlamada;
	
	
	public Gestion() {
		
	}


	public Gestion(long id_gestion, String nombre, String telefono, String gestion, TipoLlamada tipoLlamada,
			OrigenLlamada origenLlamada) {
		super();
		this.id_gestion = id_gestion;
		this.nombre = nombre;
		this.telefono = telefono;
		this.gestion = gestion;
		this.tipoLlamada = tipoLlamada;
		this.origenLlamada = origenLlamada;
	}


	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	@Column(name="gestion")
	public long getId_gestion() {
		return id_gestion;
	}


	public void setId_gestion(long id_gestion) {
		this.id_gestion = id_gestion;
	}


	@Column(name="nombre")
	public String getNombre() {
		return nombre;
	}


	public void setNombre(String nombre) {
		this.nombre = nombre;
	}


	@Column(name="telefono")
	public String getTelefono() {
		return telefono;
	}


	public void setTelefono(String telefono) {
		this.telefono = telefono;
	}

	
	@Column(name="gestion")
	public String getGestion() {
		return gestion;
	}


	public void setGestion(String gestion) {
		this.gestion = gestion;
	}

	@ManyToOne(fetch = FetchType.EAGER)
	@JoinColumn(name = "id_tipo_llamada", nullable = false)
	public TipoLlamada getTipoLlamada() {
		return tipoLlamada;
	}


	public void setTipoLlamada(TipoLlamada tipoLlamada) {
		this.tipoLlamada = tipoLlamada;
	}


	@ManyToOne(fetch = FetchType.EAGER)
	@JoinColumn(name = "id_origen_llamada", nullable = false)
	public OrigenLlamada getOrigenLlamada() {
		return origenLlamada;
	}


	public void setOrigenLlamada(OrigenLlamada origenLlamada) {
		this.origenLlamada = origenLlamada;
	}
	
	
	
	

}
