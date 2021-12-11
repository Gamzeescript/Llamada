package com.ampersand.llamada.utils;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.ampersand.llamada.beans.OrigenLlamada;

@Repository
public interface OrigenLlamadaRepository extends JpaRepository<OrigenLlamada, Long>{

}
